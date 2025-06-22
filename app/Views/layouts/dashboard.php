<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 1rem;
            background-color: #fff;
            border-right: 1px solid #ddd;
            width: 220px;
        }
        .nav-link.active {
            background-color: #0d6efd;
            color: white !important;
        }
        main {
            margin-left: 220px;
        }

        @media (max-width: 767.98px) {
            .sidebar {
                position: static;
                height: auto;
                width: 100%;
                margin-bottom: 1rem;
            }
            main {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    <div class="sidebar d-flex flex-column">
        <h5 class="text-center">ELITE DIGITAL</h5>
        <hr>
        <a href="<?= base_url('dashboard') ?>" class="nav-link <?= uri_string() === 'dashboard' ? 'active' : '' ?>">Dashboard</a>
        <a href="<?= base_url('history') ?>" class="nav-link <?= uri_string() === 'history' ? 'active' : '' ?>">History</a>
        <a href="<?= base_url('job-entry') ?>" class="nav-link <?= uri_string() === 'job-entry' ? 'active' : '' ?>">job-entry</a>
        <a href="<?= base_url('job-entry') ?>" class="nav-link">Add New Job</a>
<a href="<?= base_url('job-entry/history') ?>" class="nav-link">History</a>

        <hr class="mt-auto">
        <a href="<?= base_url('logout') ?>" class="btn btn-outline-danger w-100">Logout</a>
    </div>

    <main class="p-4">
        <?= $this->renderSection('content') ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
