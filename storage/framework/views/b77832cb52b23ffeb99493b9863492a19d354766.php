<?php if(!empty($page->accordion)): ?>
    <div class="spoilers">
        <?php $__currentLoopData = $page->accordion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="spoiler">
                <div class="spoiler__title"><span><?php echo e($item["title"]); ?></span></div>
                <div class="spoiler__desc">
                    <div class="plain-text">
                        <?php echo $item["description"]; ?>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>
<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/pages/page/components/accordion.blade.php ENDPATH**/ ?>