<!DOCTYPE html>
<html lang="<?php echo e($lang); ?>">

<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent("title",__("default.site_name")); ?></title>
    <?php echo $__env->make("app.layout.components.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent("head"); ?>
    <?php echo $__env->yieldContent("styles"); ?>
</head>

<body>
<input id="lang" type="hidden" value="<?php echo e($lang); ?>">
<div class="main-wrapper">
    <?php echo $__env->make("app.layout.components.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main class="main">
        <?php echo $__env->yieldContent("content"); ?>
    </main>
    <?php echo $__env->make("app.layout.components.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="scroll-up icon-chevron-up compensate-for-scrollbar"></div>
<?php echo $__env->make("app.layout.components.scripts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make("app.layout.components.modals", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent("scripts"); ?>
</body>

</html>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/layout/index.blade.php ENDPATH**/ ?>