<!DOCTYPE html>
<html>

<head>
    <title>Print - Job #<?= $job['job_no'] ?></title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 13px;
            margin: 7px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .job-table tbody tr {
            height: 25px;
        }

        .job-table td,
        .job-table th {
            border: 1px solid rgba(0, 0, 0, 0.3);
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
            margin: 5px;
        }

        .image-row img {
            width: 100%;
            max-height: 120px;
            object-fit: contain;
        }

        .job-table tbody tr td:nth-child(2),
        .job-table tbody tr td:nth-child(4) {
            border-right: 2px solid #0d6efd;
        }

        .job-table tbody tr.bottom-fields td {
            border-right: 1px solid rgba(0, 0, 0, 0.3);
        }

        .job-table tbody tr.bottom-fields td:first-child {
            border-right: 2px solid #0d6efd;
        }


        .job-table tbody tr td:first-child {
            border-left: none;
        }

        .job-table tbody tr td:last-child {
            border-right: none;
        }

        .bl {
            border-left: 2px solid #0d6efd;
        }

        .br {
            border-right: 2px solid #0d6efd;
        }

        .bt {
            border-top: 2px solid #0d6efd;
        }

        .bb {
            border-bottom: 2px solid #0d6efd;
        }

        .bbl {
            border-left: 1px solid rgba(0, 0, 0, 0.3);
        }

        .bbr {
            border-right: 1px solid rgba(0, 0, 0, 0.3);
        }

        .bbt {
            border-top: 1px solid rgba(0, 0, 0, 0.3);
        }

        .bbb {
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
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

        #a4-size-display {
            max-width: 700px;
            border: 2px solid #0d6efd;
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

            #a4-size-display {
                width: 100%;
                border: none;
            }

            body {
                border: 2px solid #0d6efd;
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <div id="a4-size-display">
        <h2 class="text-center my-3 " style="font-weight:700;">ELITE DIGITAL</h2>

        <table class="table job-table" style="margin-bottom: 0;">
            <tr class="bt">
                <td><strong>JOB NO : </strong></td>
                <td><?= esc($job['job_no']) ?></td>
                <td><strong>COLORS : </strong></td>
                <td><?= esc($job['colors']) ?></td>
                <td><strong>DATE : </strong></td>
                <td><?= date('d-m-Y', strtotime($job['date'])) ?></td>
            </tr>
            <tr>
                <td><strong>DESIGN NO : </strong></td>
                <td><?= esc($job['design_no']) ?></td>
                <td><strong>PANNA : </strong></td>
                <td><?= esc($job['panna']) ?></td>
                <td><strong>PASS : </strong></td>
                <td><?= esc($job['pass']) ?></td>
            </tr>
            <tr class="bb">
                <td><strong>FABRIC : </strong></td>
                <td><?= esc($job['fabric']) ?></td>
                <td><strong>CONSUMPTION :</strong></td>
                <td> <?= esc($job['consumption']) ?></td>
                <td><strong>TOTAL MTR : </strong></td>
                <td><?= esc($job['total_mtr']) ?></td>
            </tr>
            <tr>
                <td><strong>PCS : </strong></td>
                <td><?= esc($job['pcs']) ?></td>
                <td><strong>BOTTOM : </strong></td>
                <td><?= esc($job['bottom']) ?></td>
                <td><strong>PN/KM : </strong></td>
                <td><?= esc($job['pn_km']) ?></td>
            </tr>
            <tr>
                <td><strong>TOP : </strong></td>
                <td><?= esc($job['top']) ?></td>
                <td><strong>DUPATTA :</strong> </td>
                <td><?= esc($job['dupatta']) ?></td>
                <td><strong>SET-COPY : </strong></td>
                <td><?= esc($job['set_copy']) ?></td>
            </tr>
            <tr class="bb">
                <td><strong>SLEEVE : </strong></td>
                <td><?= esc($job['sleeve']) ?></td>
                <td><strong>LESS : </strong></td>
                <td><?= esc($job['less']) ?></td>
                <td><strong>ALLOVER :</strong></td>
                <td> <?= esc($job['allover']) ?></td>
            </tr>

            <?php
            if (!empty($job['images'])):
                $images = explode(',', $job['images']);
                $images = array_map('trim', $images); // Clean whitespace
                $chunks = array_chunk($images, 4);    // Split into groups of 4

                foreach ($chunks as $index => $chunk): ?>
                    <tr>
                        <td colspan="6"
                            style="text-align: center; border-bottom: 0; border-top: 0; <?= $index === 1 ? 'padding-top: 0;' : '' ?>">
                            <div style="display: flex; justify-content: center; flex-wrap: wrap;">
                                <?php foreach ($chunk as $img): ?>
                                    <div style="width: calc(100% / 4); height: 200px;">
                                        <img src="<?= base_url('uploads/jobs/' . $img) ?>"
                                            alt="Job Image"
                                            style="width: 100%; height: 100%; object-fit: fill;">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </td>
                    </tr>
            <?php endforeach;
            endif;
            ?>



            <tr class="bt bottom-fields">
                <td><strong>LOT :</strong> </td>
                <td><?= esc($job['lot']) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td><strong>ROLL :</strong></td>
                <td><?= esc($job['roll']) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td><strong>PRINT :</strong> </td>
                <td><?= esc($job['print']) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td><strong>WASTAGE :</strong> </td>
                <td><?= esc($job['wastage']) ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="bottom-fields">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>


    </div>
    <div class="text-center no-print">
        <button class="btn btn-primary" onclick="window.print()">Print Page</button>
    </div>
</body>

</html>