<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ELITE DIGITAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            /* min-height: 100dvh; */
        }
    </style>
</head>

<body class="bg-light">
    <div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    <!-- <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.toggle-password').forEach(function(toggle) {
                toggle.addEventListener('click', function() {
                    const input = this.closest('.form-floating').querySelector('input');
                    const icon = this.querySelector('i');

                    if (input) {
                        const isPassword = input.type === 'password';
                        input.type = isPassword ? 'text' : 'password';

                        icon.classList.toggle('bi-eye', isPassword);
                        icon.classList.toggle('bi-eye-slash', !isPassword);
                    }
                });
            });
        });
    </script>
</body>

</html>