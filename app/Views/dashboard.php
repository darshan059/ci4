

<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<h2>Dashboard</h2>
<p>Welcome, <strong><?= session()->get('user') ?></strong>! This is your dashboard.</p>

<?= $this->endSection() ?>