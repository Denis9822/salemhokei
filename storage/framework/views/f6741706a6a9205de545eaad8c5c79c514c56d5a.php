<?php $__env->startSection("title",__("default.site_name").' | '.__("default.pages.for_parents.whats_start")); ?>

<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/video.css')); ?>">
    <style>
        .mobile-applications{
            display: flex;
            justify-content: space-evenly;
            flex-direction: row;
        }
        .mobile-applications .col-md-1{
            width: 8.33333%;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
<?php $__env->stopSection(); ?>


<?php $__env->startSection("content"); ?>
    <div style="background: url(/assets/img/pattern4.png);
    background-size: 1440px; opacity: .75;" class="main-wrapper__bg"></div>

    <?php echo $__env->make('app.layout.components.page-title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section>
        <div class="container">
            <div class="plain-text plain-text__24 plain-text__thin">

            </div>


                <div class="margin-50">

                    <div class="video-player">
                        <video class="player" playsinline
                               poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'play_video_content_' . app()->getLocale())->getImageFileName())); ?>"
                               controls
                               src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'play_video_content_' . app()->getLocale())->getVideoFileName())); ?>"></video>

                    </div>
                </div>


            <div class="row mobile-applications">
                <div class="col-md-1">

                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.salem.salemhokei">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 512.086 512.086" style="enable-background:new 0 0 512.086 512.086;" xml:space="preserve">
<path style="fill:#2196F3;" d="M281.963,245.846l-247.68,247.68c-11.84-11.2-18.24-26.56-18.24-43.2V61.846
	c0-16.96,6.72-32.32,18.88-43.84L281.963,245.846z"/>
                            <path style="fill:#FFC107;" d="M496.043,256.086c0,22.4-12.16,42.24-32.32,53.44l-70.4,39.04l-87.36-80.64l-24-22.08l92.48-92.48
	l89.28,49.28C483.883,213.846,496.043,233.686,496.043,256.086z"/>
                            <path style="fill:#4CAF50;" d="M281.963,245.846L34.923,18.006c3.2-3.2,7.36-6.08,11.52-8.64c20.16-12.16,44.48-12.48,65.28-0.96
	l262.72,144.96L281.963,245.846z"/>
                            <path style="fill:#F44336;" d="M393.323,348.566l-281.6,155.2c-9.92,5.76-21.12,8.32-32,8.32c-11.52,0-23.04-2.88-33.28-9.28
	c-4.48-2.56-8.64-5.76-12.16-9.28l247.68-247.68l24,22.08L393.323,348.566z"/>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
                    </a>

                </div>
                <div class="col-md-1">

                    <a target="_blank" href="https://apps.apple.com/kz/app/salem-hokei/id1589610304">
                        <svg viewBox="0 0 69.45 69.45" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><style>.cls-1{fill:url(#linear-gradient);}.cls-2{fill:#fff;}</style><linearGradient gradientUnits="userSpaceOnUse" id="linear-gradient" x1="34.72" x2="34.72" y2="69.45"><stop offset="0" stop-color="#78d2f9"/><stop offset="1" stop-color="#3458e9"/></linearGradient></defs><title/><g data-name="Layer 2" id="Layer_2"><g data-name="Layer 1" id="Layer_1-2"><circle class="cls-1" cx="34.72" cy="34.72" r="34.72"/><path class="cls-2" d="M34.65,20.16l1.12-1.93a2.52,2.52,0,0,1,4.37,2.51L29.35,39.41h7.8a3.45,3.45,0,0,1,2.85,5H17.13a2.52,2.52,0,1,1,0-5h6.41l8.21-14.23-2.56-4.45a2.52,2.52,0,1,1,4.36-2.51l1.1,1.94ZM25,47l-2.42,4.2a2.52,2.52,0,0,1-4.37-2.52L20,45.6A4.32,4.32,0,0,1,25,47Zm20.83-7.6h6.54a2.52,2.52,0,0,1,0,5H48.68l2.46,4.25a2.52,2.52,0,0,1-4.37,2.52q-6.19-10.75-9.29-16.1a7,7,0,0,1,.88-8.52q2.47,4.25,7.42,12.82Z"/></g></g></svg>
                    </a>

                </div>
            </div>

        </div>
    </section>
    <style>
        @media  screen and (max-width: 1030px) {
            .col-md-1 svg
            {
                width: 60px;
                height: 60px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/video.js')); ?>"></script>
    <script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
    <script>
        const players = Plyr.setup('.player');

        // console.log(players)
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/pages/play.blade.php ENDPATH**/ ?>