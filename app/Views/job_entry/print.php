<!DOCTYPE html>
<html>

<head>
    <title>Print - Job #<?= $job['job_no'] ?></title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 13px;
            margin: 20px;
        }

        .bl {
            border-left: 3px solid #0d6efd;
        }

        .br {
            border-right: 3px solid #0d6efd;
        }

        .bt {
            border-top: 3px solid #0d6efd;
        }

        .bb {
            border-bottom: 3px solid #0d6efd;
        }

        .bbl {
            border-left: 1px solid #000;
        }

        .bbr {
            border-right: 1px solid #000;
        }

        .bbt {
            border-top: 1px solid #000;
        }

        .bbb {
            border-bottom: 1px solid #000;
        }

        /* border none */
        .bbl {
            border-left: none;
        }

        .bbr {
            border-right: none;
        }

        .bbt {
            border-top: none;
        }

        .bbb {
            border-bottom: none;
        }

        .job-table td,
        .job-table th {
            border: 1px solid #000;
            vertical-align: middle;
            text-align: center;
            padding: 5px;
            font-size: 12px;
            font-weight: 500;
        }

        /* .job-table td:first-child,
        .job-table th:first-child {
            border-left: none;
        }

        .job-table td:last-child,
        .job-table th:first-child {
            border-right: none;
        } */

        .job-table th {
            background-color: #f5f5f5;
        }

        .image-row {
            display: flex;
            gap: 10px;
            margin: 15px 0;
        }

        .image-row img {
            width: 100%;
            max-height: 120px;
            object-fit: contain;
            border: 1px solid #aaa;
        }

        @page {
            size: A4;
        }

        @media print {
            .table {
                padding: 5px;
            }

            .no-print {
                display: none;
            }
        }

        .job-table tbody tr td:nth-child(2),
        .job-table tbody tr td:nth-child(4) {
            border-right: 3px solid #0d6efd;
        }

        .job-table tbody tr td:first-child {
            border-left: none;
        }

        .job-table tbody tr td:last-child {
            border-right: none;
        }
    </style>
</head>

<body id="a4-size-display" class="border border-primary border-3">

    <h2 class="text-center my-3 " style="font-weight:700;">ELITE DIGITAL</h2>

    <table class="table job-table">
        <tr class="bt">
            <td>JOB NO: </td>
            <td><?= esc($job['job_no']) ?></td>
            <td>COLORS: </td>
            <td><?= esc($job['colors']) ?></td>
            <td>DATE: </td>
            <td><?= date('d-m-Y', strtotime($job['date'])) ?></td>
        </tr>
        <tr>
            <td>DESIGN NO: </td>
            <td><?= esc($job['design_no']) ?></td>
            <td>PANNA: </td>
            <td><?= esc($job['panna']) ?></td>
            <td>PASS: </td>
            <td><?= esc($job['pass_status']) ?></td>
        </tr>
        <tr class="bb">
            <td>FABRIC: </td>
            <td><?= esc($job['fabric']) ?></td>
            <td>CONSUMPTION:</td>
            <td> <?= esc($job['consumption']) ?></td>
            <td>TOTAL MTR: </td>
            <td><?= esc($job['total_mtr']) ?></td>
        </tr>
        <tr>
            <td>PCS: </td>
            <td><?= esc($job['pcs']) ?></td>
            <td>BOTTOM: </td>
            <td><?= esc($job['bottom']) ?></td>
            <td>PN/KM: </td>
            <td><?= esc($job['pn_km']) ?></td>
        </tr>
        <tr>
            <td>TOP: </td>
            <td><?= esc($job['top']) ?></td>
            <td>DUPATTA: </td>
            <td><?= esc($job['dupatta']) ?></td>
            <td>SET-COPY: </td>
            <td><?= esc($job['set_copy']) ?></td>
        </tr>
        <tr class="bb">
            <td>SLEEVE: </td>
            <td><?= esc($job['sleeve']) ?></td>
            <td>LESS: </td>
            <td><?= esc($job['less']) ?></td>
            <td>ALLOVER:</td>
            <td> <?= esc($job['allover']) ?></td>
        </tr>
    </table>

    <!-- Image Area -->
    <?php if (!empty($job['images'])): ?>
        <div class="image-row">
            <?php foreach (explode(',', $job['images']) as $img): ?>
                <div style="flex: 1;">
                    <img src="<?= base_url('uploads/jobs/' . $img) ?>" alt="Job Image">
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- Bottom section -->
    <table class="table job-table">
        <tr>
            <td><strong>LOT:</strong> <?= esc($job['lot']) ?></td>
            <td><strong>ROLL:</strong> <?= esc($job['roll']) ?></td>
            <td><strong>PRINT:</strong> <?= esc($job['print']) ?></td>
            <td><strong>WASTAGE:</strong> <?= esc($job['wastage']) ?></td>
        </tr>
    </table>

    <!-- Signature or footer -->
    <div class="text-end mt-4">
        <p>Signature: ____________________</p>
        <p>Date: <?= esc(date('d-m-Y', strtotime($job['date']))) ?></p>
    </div>

    <div class="text-center no-print">
        <button class="btn btn-primary" onclick="window.print()">Print Page</button>
    </div>

    <!-- <script>
        function updatePageSize() {
            const width = document.documentElement.clientWidth;
            const height = document.documentElement.clientHeight;

            const sizeBox = document.getElementById('a4-size-display');
            sizeBox.style.width = `${width}px`;
            sizeBox.style.height = `${height}px`;
        }

        window.addEventListener('load', updatePageSize);
        window.addEventListener('resize', updatePageSize);
    </script> -->

</body>

</html>