<?php $links = $pager->links('jobs'); ?>
<?php if (!empty($links)): ?>

  <nav>
    <ul class="pagination justify-content-center">

      <!-- First and Previous -->
      <?php if ($pager->hasPrevious('jobs')): ?>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getFirst('jobs') ?>" aria-label="First">
            &laquo;
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getPreviousPage('jobs') ?>" aria-label="Previous">
            &lsaquo;
          </a>
        </li>
      <?php endif; ?>

      <!-- Page Numbers -->
      <?php
      $links = $pager->links('jobs');
      $total = count($links);
      $start = max(0, $pager->getCurrentPage('jobs') - 2);
      $end = min($total - 1, $start + 4);
      $showEllipsis = $total > 5;

      if ($start > 0): ?>
        <li class="page-item disabled"><span class="page-link">...</span></li>
      <?php endif; ?>

      <?php for ($i = $start; $i <= $end; $i++): ?>
        <?php $link = $links[$i]; ?>
        <li class="page-item <?= $link['active'] ? 'active' : '' ?>">
          <a class="page-link" href="<?= $link['uri'] ?>">
            <?= $link['title'] ?>
          </a>
        </li>
      <?php endfor; ?>

      <?php if ($end < $total - 1): ?>
        <li class="page-item disabled"><span class="page-link">...</span></li>
      <?php endif; ?>

      <!-- Next and Last -->
      <?php if ($pager->hasNext('jobs')): ?>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getNextPage('jobs') ?>" aria-label="Next">
            &rsaquo;
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="<?= $pager->getLast('jobs') ?>" aria-label="Last">
            &raquo;
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
<?php endif; ?>