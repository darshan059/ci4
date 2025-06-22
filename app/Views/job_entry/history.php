<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<h3 class="mb-4">Job History</h3>

<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('message') ?></div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Job No</th>
                <th>Design No</th>
                <th>Date</th>
                <th>Fabric</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= $job['id'] ?></td>
                <td><?= esc($job['job_no']) ?></td>
                <td><?= esc($job['design_no']) ?></td>
                <td><?= esc($job['date']) ?></td>
                <td><?= esc($job['fabric']) ?></td>
                <td>
                    <a href="<?= site_url('job-entry/edit/' . $job['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="<?= site_url('job-entry/delete/' . $job['id']) ?>" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                    <a href="<?= site_url('job-entry/print/' . $job['id']) ?>" class="btn btn-sm btn-primary" target="_blank">Print</a>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
