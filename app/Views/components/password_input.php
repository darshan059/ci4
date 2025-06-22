<!-- <div class="form-floating mb-4 position-relative">
  <input type="password" name="<?= $name ?? 'password' ?>" id="<?= $id ?? 'password' ?>" class="form-control" placeholder="Password" required>
  <label for="<?= $id ?? 'password' ?>"><?= $label ?? 'Password' ?></label>
  <i class="bi bi-eye-slash toggle-password position-absolute top-50 end-0 translate-middle-y me-3 z-3" style="cursor: pointer;"></i>
</div> -->

<div class="form-floating mb-4 position-relative">
  <input type="password" name="<?= $name ?? 'password' ?>" id="<?= $id ?? 'password' ?>" class="form-control password-field" placeholder="Password" required>
  <label for="<?= $id ?? 'password' ?>"><?= $label ?? 'Password' ?></label>

  <!-- Put the icon *outside* the floating label/input overlap -->
  <span class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3" style="cursor: pointer; z-index: 10;">
    <i class="bi bi-eye-slash fs-5"></i>
  </span>
</div>