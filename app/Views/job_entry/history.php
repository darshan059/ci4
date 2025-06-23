<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<div class="">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Job History</h3>

        <form method="get" action="<?= site_url('job-entry/history') ?>">
            <div class="input-group">
                <input type="text" name="search" value="<?= esc($_GET['search'] ?? '') ?>" class="form-control" placeholder="Search by Job No, Design No or Fabric">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
        </form>

        <a href="<?= site_url('job-entry/history') ?>" class="btn btn-outline-secondary">Clear</a>

        <a href="<?= site_url('job-entry') ?>" class="btn btn-outline-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Add New Job
        </a>


    </div>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1055;">
            <div class="toast align-items-center text-white bg-success border-0 show shadow" role="alert">
                <div class="d-flex">
                    <div class="toast-body fw-semibold">
                        <?= session()->getFlashdata('message') ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto"
                        data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="table-responsive rounded shadow-sm">
        <table class="table table-hover table-bordered align-middle mb-0 bg-white">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Job No</th>
                    <th scope="col">Design No</th>
                    <th scope="col">Date</th>
                    <th scope="col">Fabric</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($jobs)): ?>
                    <?php foreach ($jobs as $job): ?>
                        <tr>
                            <td class="text-center"><?= $job['id'] ?></td>
                            <td class="text-center"><?= esc($job['job_no']) ?></td>
                            <td class="text-center"><?= esc($job['design_no']) ?></td>
                            <td class="text-center"><?= esc($job['date']) ?></td>
                            <td class="text-center"><?= esc($job['fabric']) ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="<?= site_url('job-entry/edit/' . $job['id']) ?>"
                                        class="btn btn-outline-warning" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="<?= site_url('job-entry/delete/' . $job['id']) ?>"
                                        onclick="return confirm('Are you sure?')"
                                        class="btn btn-outline-danger" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <a href="<?= site_url('job-entry/print/' . $job['id']) ?>"
                                        target="_blank"
                                        class="btn btn-outline-primary" title="Print">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center text-muted">No job entries found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="mt-3">
            <?= $pager->links('jobs', 'bootstrap') ?>
        </div>

    </div>

</div>

<!-- Toast script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toastEl = document.querySelector('.toast');
        if (toastEl) {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
</script>

<?= $this->endSection() ?>