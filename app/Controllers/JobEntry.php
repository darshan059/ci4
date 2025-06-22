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

        foreach ($images as $image) {
            if ($image->isValid() && !$image->hasMoved()) {
                $image->move('uploads/jobs/');
                $imagePaths[] = $image->getName();
            }
        }

        $data = [
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
            'pass_status' => $this->request->getPost('pass'),
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
        $model = new \App\Models\JobEntryModel();
        $data['jobs'] = $model->orderBy('id', 'DESC')->findAll();
        return view('job_entry/history', $data);
    }

    public function edit($id)
    {
        $model = new \App\Models\JobEntryModel();
        $data['job'] = $model->find($id);
        return view('job_entry/edit', $data);
    }

    public function update($id)
    {
        $model = new \App\Models\JobEntryModel();

        $model->update($id, $this->request->getPost());

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
