<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobEntryModel;
use CodeIgniter\HTTP\ResponseInterface;

class JobEntry extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('job_entry/create');
    }

    public function store()
    {
        $model = new JobEntryModel();

        // Handle image uploads
        $images = $this->request->getFiles()['images'];
        $imagePaths = [];

        if ($images && is_array($images)) {
            foreach ($images as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = uniqid('img_') . '.' . $img->getExtension();
                    $img->move(FCPATH . 'uploads/jobs/', $newName);
                    $imagePaths[] = $newName;
                }
            }
        }

        $userId = session()->get('user_id');

        $data = [
            'user_id' => $userId,
            'job_no' => $this->request->getPost('job_no'),
            'design_no' => $this->request->getPost('design_no'),
            'fabric' => $this->request->getPost('fabric'),
            'pcs' => $this->request->getPost('pcs'),
            'top' => $this->request->getPost('top'),
            'sleeve' => $this->request->getPost('sleeve'),
            'colors' => $this->request->getPost('colors'),
            'panna' => $this->request->getPost('panna'),
            'consumption' => $this->request->getPost('consumption'),
            'bottom' => $this->request->getPost('bottom'),
            'dupatta' => $this->request->getPost('dupatta'),
            'less' => $this->request->getPost('less'),
            'date' => $this->request->getPost('date'),
            'pass' => $this->request->getPost('pass'),
            'total_mtr' => $this->request->getPost('total_mtr'),
            'pn_km' => $this->request->getPost('pn_km'),
            'set_copy' => $this->request->getPost('set_copy'),
            'allover' => $this->request->getPost('allover'),
            'lot' => $this->request->getPost('lot'),
            'roll' => $this->request->getPost('roll'),
            'print' => $this->request->getPost('print'),
            'wastage' => $this->request->getPost('wastage'),
            'images' => implode(',', $imagePaths)
        ];

        $model->save($data);

        return redirect()->to('/job-entry/print/' . $model->getInsertID());
    }

    public function history()
    {
        $model = new JobEntryModel();
        $search = $this->request->getGet('search');
        $userId = session()->get('user_id');

        $model->where('user_id', $userId);

        if ($search) {
            $model->groupStart()
                ->like('job_no', $search)
                ->orLike('design_no', $search)
                ->orLike('fabric', $search)
                ->groupEnd();
        }

        $jobs = $model->orderBy('created_at', 'DESC')->paginate(10, 'jobs');

        $pager = $model->pager;
        $pager->setPath(uri_string());

        return view('job_entry/history', [
            'jobs' => $jobs,
            'pager' => $pager,
            'search' => $search,
        ]);
    }



    public function edit($id)
    {
        $model = new JobEntryModel();
        $data['job'] = $model->find($id);
        return view('job_entry/create', $data);
    }

    public function update($id)
{
    $model = new JobEntryModel();
    $job = $model->find($id);

    if (!$job) {
        return redirect()->back()->with('error', 'Job not found.');
    }

    // Get existing images
    $existingImages = explode(',', $job['images'] ?? '');
    $removedImages = explode(',', $this->request->getPost('removed_images') ?? '');
    $remainingImages = [];

    // Filter out removed images
    foreach ($existingImages as $img) {
        $img = trim($img);
        if (!in_array($img, $removedImages)) {
            $remainingImages[] = $img;
        } else {
            $path = ROOTPATH . 'public/uploads/jobs/' . $img;
            if (!empty($img) && is_file($path) && file_exists($path)) {
                try {
                    unlink($path);
                } catch (\Throwable $e) {
                    log_message('error', 'Could not delete image: ' . $path . ' - ' . $e->getMessage());
                }
            }
        }
    }

    // Handle newly uploaded images
    $newImages = [];
    $uploadedFiles = $this->request->getFiles();
    if (!empty($uploadedFiles['images'])) {
        foreach ($uploadedFiles['images'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move(ROOTPATH . 'public/uploads/jobs', $newName);
                $newImages[] = $newName;
            }
        }
    }

    // Merge all available images
    $allImages = array_merge($remainingImages, $newImages);

    // 🟡 Reorder using 'image_order' (drag-drop value)
    $orderedImages = [];
    $imageOrder = explode(',', $this->request->getPost('image_order') ?? '');

    foreach ($imageOrder as $img) {
        $img = trim($img);
        if (in_array($img, $allImages)) {
            $orderedImages[] = $img;
        }
    }

    // Include any not listed (e.g. new images not ordered)
    foreach ($allImages as $img) {
        if (!in_array($img, $orderedImages)) {
            $orderedImages[] = $img;
        }
    }

    // Get form data
    $data = $this->request->getPost();

    // Save ordered image list
    $data['images'] = implode(',', $orderedImages);

    // Clean unused inputs
    unset($data['removed_images'], $data['image_order']);

    // Update
    $model->update($id, $data);

    return redirect()->to('/job-entry/history')->with('message', 'Job updated successfully.');
}

    public function delete($id)
    {
        $model = new \App\Models\JobEntryModel();
        $model->delete($id);
        return redirect()->to('/job-entry/history')->with('message', 'Job deleted.');
    }

    public function print($id)
    {
        $model = new JobEntryModel();
        $data['job'] = $model->find($id);
        return view('job_entry/print', $data);
    }
}
