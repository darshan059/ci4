<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<h3>Add Job Entry</h3>
<form action="/job-entry/store" method="post" enctype="multipart/form-data" class="row g-3">
    <?php
    $fields = ['job_no','design_no','fabric','pcs','top','sleeve','colors','panna','consumption','bottom','dupatta','less','date','pass','total_mtr','pn_km','set_copy','allover','lot','roll','print','wastage'];
    foreach ($fields as $field):
    ?>
    <div class="col-md-4">
        <label class="form-label"><?= ucwords(str_replace('_', ' ', $field)) ?></label>
        <input type="<?= ($field === 'date') ? 'date' : 'text' ?>" name="<?= $field ?>" class="form-control">
    </div>
    <?php endforeach; ?>

    <div class="col-12">
        <label class="form-label">Upload Images</label>
        <input type="file" name="images[]" class="form-control" multiple accept="image/*">
    </div>

    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">Save Job</button>
    </div>
</form>

<?= $this->endSection() ?>
