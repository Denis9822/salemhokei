<?php $__env->startSection('title', $item->name); ?>

<?php $__env->startSection('content'); ?>
  <section class="page_section">
    <div class="container">
      <h1 class="title-primary"><?php echo e($item->name); ?></h1>
      <div>
        <?php echo $item->description; ?>

      </div>
      
      <?php echo $__env->make("app.pages.page.components.accordion",["page" => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/pages/page/default.blade.php ENDPATH**/ ?>