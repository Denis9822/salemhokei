<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/<?php echo e($lang); ?>" title="Главная">
                <img class="logo_img" src="/assets/img/logo.svg" alt="">
                <img class="mobile_logo_img" src="/assets/img/salem-hokkey-logo.png" alt="">
            </a>
        </div>
        <div class="menu-btn-wrapper">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right__top">
                

            </div>
            <?php if($lang == 'kk'): ?>
                <nav class="menu menu--kk"><?php else: ?>
                        <nav class="menu">
                            <?php endif; ?>


                            <div class="d-flex flex-column flex-lg-row justify-content-around">

                                
                                <?php echo $MyNavBar->asUl( ['class' => 'first_level_list'], ['class' => 'second_level_list']); ?>


                                <div class="language" style="">
                                    <?php if(app()->getLocale() == 'ru'): ?>
                                        <a href="/kk<?php echo e($uri); ?>" title="KZ">KZ</a>
                                        <span>|</span>
                                        <a href="/ru<?php echo e($uri); ?>" title="RU" class="active">RU</a>
                                    <?php else: ?>
                                        <a href="/kk<?php echo e($uri); ?>" title="KZ" class="active">KZ</a>
                                        <span>|</span>
                                        <a href="/ru<?php echo e($uri); ?>" title="RU">RU</a>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </nav>
        </div>
    </div>
</header>


<?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/layout/components/header.blade.php ENDPATH**/ ?>