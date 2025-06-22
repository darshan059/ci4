<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-12 col-sm-10 col-md-8 col-lg-5">
        <div class="card shadow rounded-4 p-4">
            <h2 class="text-center mb-4">Register</h2>

            <form action="/register" method="post" class="needs-validation" novalidate>
                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    <label for="username">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    <label for="email">Email address</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 rounded-pill">Register</button>

                <div class="text-center mt-3">
                    <small>Already have an account? <a href="/login">Login</a></small>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
