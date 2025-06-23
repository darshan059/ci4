<?= $this->extend('layouts/dashboard') ?>
<?= $this->section('content') ?>

<h3><?= isset($job) ? 'Edit Job Entry' : 'Add Job Entry' ?></h3>

<form action="<?= isset($job) ? base_url('job-entry/update/' . $job['id']) : base_url('job-entry/store') ?>"
    method="post" enctype="multipart/form-data" class="row g-3">

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
            <input type="<?= ($field === 'date') ? 'date' : ($isNumberField ? 'number' : 'text') ?>"
                name="<?= $field ?>" value="<?= $value ?>"
                class="form-control <?= $isNumberField ? 'number-only' : '' ?>"
                <?= $isNumberField ? 'inputmode="numeric" pattern="\d*"' : '' ?>>
        </div>
    <?php endforeach; ?>

    <div class="col-12">
        <label class="form-label">Upload Images (max 8)</label>
        <input type="file" id="imageInput" name="images[]" class="form-control" multiple accept="image/*">

        <div id="allImagesWrapper" class="mt-2 d-flex flex-wrap gap-2">
            <?php if (!empty($job['images'])): ?>
                <input type="hidden" name="removed_images" id="removedImages">
                <?php foreach (explode(',', $job['images']) as $img): ?>
                    <?php $img = trim($img); ?>
                    <div class="position-relative image-box" data-image="<?= $img ?>" style="width: 80px; height: 80px;">
                        <img src="<?= base_url('uploads/jobs/' . $img) ?>" width="80" height="80"
                            style="object-fit: cover; border: 1px solid #ccc;">
                        <button type="button"
                            class="btn btn-sm btn-danger position-absolute top-0 end-0 remove-uploaded"
                            style="padding: 2px 6px; font-size: 12px;">&times;</button>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Track order -->
        <input type="hidden" name="image_order" id="imageOrder">
    </div>

    <div class="col-12 text-end">
        <button type="submit" class="btn btn-primary">
            <?= isset($job) ? 'Update Job' : 'Save Job' ?>
        </button>
    </div>
</form>

<!-- SortableJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Only allow numbers
    document.querySelectorAll('.number-only').forEach(function (input) {
        input.addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    const input = document.getElementById('imageInput');
    const imageWrapper = document.getElementById('allImagesWrapper');
    const removedImagesInput = document.getElementById('removedImages');
    const imageOrderInput = document.getElementById('imageOrder');
    const uploadedImageBoxes = document.querySelectorAll('.image-box');

    let selectedFiles = [];
    let existingImages = [...uploadedImageBoxes].map(box => box.getAttribute('data-image'));

    // Remove existing images
    uploadedImageBoxes.forEach(box => {
        const btn = box.querySelector('.remove-uploaded');
        btn.addEventListener('click', function () {
            const imageName = box.getAttribute('data-image');
            existingImages = existingImages.filter(img => img !== imageName);
            box.remove();

            const removedList = removedImagesInput.value ? removedImagesInput.value.split(',') : [];
            if (!removedList.includes(imageName)) {
                removedList.push(imageName);
                removedImagesInput.value = removedList.join(',');
            }

            updateImageOrder();
        });

        // Move to sortable container
        imageWrapper.appendChild(box);
    });

    input.addEventListener('change', function (e) {
        const files = Array.from(e.target.files);
        const totalFiles = existingImages.length + selectedFiles.length + files.length;

        if (totalFiles > 8) {
            alert('Maximum 8 images allowed.');
            input.value = '';
            return;
        }

        files.forEach(file => {
            const reader = new FileReader();
            reader.onload = function (event) {
                const imgWrapper = document.createElement('div');
                imgWrapper.className = 'position-relative image-box';
                imgWrapper.style.width = '80px';
                imgWrapper.style.height = '80px';

                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.objectFit = 'cover';
                img.style.border = '1px solid #ccc';

                const removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.innerHTML = '&times;';
                removeBtn.className = 'btn btn-sm btn-danger position-absolute top-0 end-0';
                removeBtn.style.padding = '2px 6px';
                removeBtn.style.fontSize = '12px';
                removeBtn.addEventListener('click', () => {
                    selectedFiles = selectedFiles.filter(f => f !== file);
                    imgWrapper.remove();
                    updateFileInput();
                    updateImageOrder();
                });

                imgWrapper.appendChild(img);
                imgWrapper.appendChild(removeBtn);
                imageWrapper.appendChild(imgWrapper);
                selectedFiles.push(file);
                updateFileInput();
                updateImageOrder();
            };
            reader.readAsDataURL(file);
        });

        input.value = '';
    });

    function updateFileInput() {
        const dataTransfer = new DataTransfer();
        selectedFiles.forEach(file => dataTransfer.items.add(file));
        input.files = dataTransfer.files;
    }

    function updateImageOrder() {
        const imageBoxes = imageWrapper.querySelectorAll('.image-box');
        const order = [];
        imageBoxes.forEach(box => {
            const name = box.getAttribute('data-image');
            if (name) {
                order.push(name);
            }
        });
        imageOrderInput.value = order.join(',');
    }

    // Make image box sortable
    new Sortable(imageWrapper, {
        animation: 150,
        onSort: updateImageOrder
    });

    updateImageOrder();
});
</script>

<?= $this->endSection() ?>
