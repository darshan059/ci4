<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

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
            width: 250px;
            background-color: #1e293b;
            color: #fff;
            padding: 1rem;
            z-index: 1040;
            transition: all 0.3s ease;
        }

        .sidebar .nav-link {
            color: #cbd5e1;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px 15px;
            border-radius: 6px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #0d6efd;
            color: #fff !important;
        }

        .sidebar h4 {
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }

        main {
            margin-left: 250px;
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            main {
                margin-left: 0;
            }
        }

        .nav-footer {
            margin-top: auto;
        }

        .offcanvas-body .nav-link {
            padding: 10px;
        }

        .offcanvas-body .nav-link.active {
            background-color: #0d6efd;
            color: #fff !important;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <!-- Top Navbar for Mobile -->
    <nav class="navbar navbar-dark bg-dark d-md-none sticky-top">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h6">ELITE DIGITAL</span>
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar">
                <i class="bi bi-list"></i>
            </button>
        </div>
    </nav>


    <!-- Sidebar -->
    <div class="sidebar d-none d-md-flex flex-column">
        <h4>ELITE DIGITAL</h4>
        <hr class="text-secondary">

        <a href="<?= base_url('job-entry') ?>" class="nav-link <?= uri_string() === 'job-entry' ? 'active' : '' ?>">
            <i class="bi bi-plus-circle"></i> Add New Job
        </a>

        <a href="<?= base_url('job-entry/history') ?>" class="nav-link <?= uri_string() === 'job-entry/history' ? 'active' : '' ?>">
            <i class="bi bi-clock-history"></i> History
        </a>

        <div class="nav-footer mt-auto pt-3">
            <hr class="text-secondary">
            <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>

    <!-- Mobile Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="mobileSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-2">
            <a href="<?= base_url('job-entry') ?>" class="nav-link text-white <?= uri_string() === 'job-entry' ? 'active' : '' ?>">
                <i class="bi bi-plus-circle"></i> Add New Job
            </a>
            <a href="<?= base_url('job-entry/history') ?>" class="nav-link text-white <?= uri_string() === 'job-entry/history' ? 'active' : '' ?>">
                <i class="bi bi-clock-history"></i> History
            </a>
            <hr class="text-secondary">
            <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>