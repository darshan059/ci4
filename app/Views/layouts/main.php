<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ELITE DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>"> -->

    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            /* min-height: 100dvh; */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container py-5">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>