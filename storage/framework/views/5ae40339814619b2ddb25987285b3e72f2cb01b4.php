<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('admin.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <?php echo $__env->yieldContent('head'); ?>
        <title><?php echo $__env->yieldContent('title'); ?></title>
    </head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php echo $__env->make('admin.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('admin.partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- page content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /page content -->
            <?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


    <?php echo $__env->make('admin.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/admin/layout.blade.php ENDPATH**/ ?>