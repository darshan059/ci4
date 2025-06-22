<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<h3><?= isset($job) ? 'Edit Job Entry' : 'Add Job Entry' ?></h3>

<form action="<?= isset($job) ? base_url('job-entry/update/' . $job['id']) : base_url('job-entry/store') ?>"
    method="post"
    enctype="multipart/form-data"
    class="row g-3">

    <?php if (isset($job)): ?>
        <input type="hidden" name="_method" value="PUT">
    <?php endif; ?>

    <?php
    $fields = ['job_no', 'colors', 'date', 'design_no', 'panna', 'pass', 'fabric', 'consumption', 'total_mtr', 'pcs', 'bottom', 'pn_km', 'top', 'dupatta', 'set_copy', 'sleeve', 'less', 'allover', 'lot', 'roll', 'print', 'wastage'];
    foreach ($fields as $field):
        $isNumberField = preg_match('/^(job_no|design_no|panna|pass|total_mtr|set_copy|lot|roll|print|wastage|consumption|bottom|pn_km|top|sleeve|less)$/', $field);
        $value = isset($job[$field]) ? esc($job[$field]) : '';
    ?>
        <div class="col-md-4">
            <label class="form-label"><?= ucwords(str_replace('_', ' ', $field)) ?></label>
            <input
                type="<?= ($field === 'date') ? 'date' : ($isNumberField ? 'number' : 'text') ?>"
                name="<?= $field ?>"
                value="<?= $value ?>"
                class="form-control <?= $isNumberField ? 'number-only' : '' ?>"
                <?= $isNumberField ? 'inputmode="numeric" pattern="\d*"' : '' ?>>
        </div>
    <?php endforeach; ?>

    <div class="col-12">
        <label class="form-label">Upload Images</label>
        <input type="file" name="images[]" class="form-control" multiple accept="image/*">
        <?php if (!empty($job['images'])): ?>
            <div class="mt-2 d-flex flex-wrap gap-2">
                <?php foreach (explode(',', $job['images']) as $img): ?>
                    <img src="<?= base_url('uploads/jobs/' . trim($img)) ?>" width="80" height="80" style="object-fit: cover; border: 1px solid #ccc;">
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">
            <?= isset($job) ? 'Update Job' : 'Save Job' ?>
        </button>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.number-only').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
    });
</script>

<?= $this->endSection() ?>