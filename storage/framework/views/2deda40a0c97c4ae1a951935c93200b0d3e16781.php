<section class="blue-title">
    <div class="container">
        <div class="title-block text-center">
            <h1 class="title-primary">




                <?php
                    $parsedUrl = parse_url(\Request::url());
                    $currentPath = $parsedUrl['path'];
                ?>
                <?php $__currentLoopData = $MyNavBar->roots(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $parsedUrl = parse_url($item->url());
                        $path = $parsedUrl['path'];
                    ?>

                    <?php if($path == $currentPath): ?>
                        <?php echo $item->title; ?>

                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </h1>
        </div>
    </div>
</section>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/layout/components/page-title.blade.php ENDPATH**/ ?>