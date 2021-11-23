<?php $__env->startSection('styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/video.css')); ?>">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css">
    <style>
        .splide__track .splide__slide
        {
            filter: blur(4px);
        }
        .splide__track .splide__slide
        {
            filter: blur(10px);
        }
        .splide__track .is-active
        {
            filter: blur(0);
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #000;
        }

        .swiper-slide img {
            width: auto;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            -ms-transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
        }
        .video-player video
        {
            position: absolute;
            bottom: -10px;
        }
        .banner .video-player
        {
            height: 56.3vw;
        }
        .banner video
        {
            width: 100%;
            height: 37.1vw;
        }
        .plyr--stopped.plyr__poster-enabled .plyr__poster
        {

        }
        .mob_video
        {
            display: none;
        }
        @media  screen and (max-width: 1400px) {
            .banner video
            {

                height: 30.7vw;
            }
        }
        @media  screen and (max-width: 1200px) {
            .pc_video
            {
                display: none;
            }
            .mob_video
            {
                display: flex;
            }
            .mob_video .splide__slide
            {
                filter: blur(0);
            }
            .mob_video .splide__list
            {
                width: 100%;
            }
            .mob_video video
            {
                height: 56.3vw;
            }
            svg [data-name="transparent-layer"]
            {
                transition: 1s !important;
            }

        }
        @media  screen and (max-width: 400px) {

            .anim_mob svg [data-name="transparent-layer"]
            {
                opacity: 0 !important;
                transition: 2s !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', __('default.site_name')); ?>



<?php $__env->startSection('content'); ?>
    <div style="background-image: url(/assets/img/pattern1.png);
                                background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

        <section class="banner">

            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="pc_video splide mySwiper">
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getImageFileName())); ?>"  controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getVideoFileName())); ?>"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getVideoFileName())); ?>"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getVideoFileName())); ?>"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getImageFileName())); ?>"  controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getVideoFileName())); ?>"
                                   ></video>
                        </div>
                    </ul>
                </div>
            </div>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="splide mob_video">
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getVideoFileName())); ?>"></video>
                        </div>

                        <div class="splide__slide">
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getVideoFileName())); ?>"></video>
                        </div>
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getVideoFileName())); ?>"></video>
                        </div>
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="<?php echo e(asset('img/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getImageFileName())); ?>" controls src="<?php echo e(asset('videos/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getVideoFileName())); ?>"></video>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

    
    
    

    <section>
        <div class="container starting_area_section">



            <?php if($lang == 'kk'): ?>

                <div class="margin-50">
                    <a id="bl1" href="/<?php echo e($lang); ?>/" class="anim_mob d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/kk/01.svg')); ?>">
                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl2" href="/<?php echo e($lang); ?>/faq" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/kk/02.svg')); ?>">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl3" href="/<?php echo e($lang); ?>/hockey" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/kk/03.svg')); ?>" >

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl4" href="/<?php echo e($lang); ?>/schools" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/kk/04.svg')); ?>">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl5" href="/<?php echo e($lang); ?>/play" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/kk/05.svg')); ?>">

                    </a>
                </div>
            <?php else: ?>
                <div class="margin-50">
                    <a id="bl1" href="/<?php echo e($lang); ?>/" class="anim_mob d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/ru/01.svg')); ?>">
                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl2" href="/<?php echo e($lang); ?>/faq" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/ru/02.svg')); ?>">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl3" href="/<?php echo e($lang); ?>/hockey" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/ru/03.svg')); ?>" >

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl4" href="/<?php echo e($lang); ?>/schools" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/ru/04.svg')); ?>">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl5" href="/<?php echo e($lang); ?>/play" class="d-block h-75 animation-item" data-svg="<?php echo e(asset('images/animations/ru/05.svg')); ?>">

                    </a>
                </div>
































































































































            <?php endif; ?>

        </div>
    </section>


    

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">


    <div id="ls" class="form-modal" style="display:none">
        <h4 class="title-primary text-center">
            <?php echo __('default.pages.main.modal_title'); ?>

        </h4>
        <div class="modal_img">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228.93 66.78">
                <defs>
                    <style>
                        .cls-1{fill:#1aa6e0;}.cls-1,.cls-2,.cls-3,.cls-5,.cls-7{fill-rule:evenodd;}.cls-2,.cls-3,.cls-4,.cls-5,.cls-6,.cls-8{fill:none;stroke:#1b215d;stroke-linecap:round;stroke-linejoin:round;}.cls-2,.cls-4{stroke-width:2.15px;}.cls-3,.cls-8{stroke-width:2.16px;}.cls-5,.cls-6{stroke-width:2.15px;}.cls-7{fill:#fff;}
                    </style>
                </defs>
                <g id="Слой_2" data-name="Слой 2">
                    <g id="Слой_1-2" data-name="Слой 1">
                        <a data-name="dd" xlink:href="/ru" onclick="setCookie('modal', 'true', 33);" target="_top">
                        <path class="cls-1"
                              d="M195.54,65.7H33.39A32.31,32.31,0,0,1,1.08,33.39h0A32.3,32.3,0,0,1,33.39,1.08H195.54a32.31,32.31,0,0,1,32.31,32.31h0A32.32,32.32,0,0,1,195.54,65.7Z"/>
                        <path class="cls-2" d="M161.82,65.7H33.39A32.31,32.31,0,0,1,1.08,33.39h0A32.33,32.33,0,0,1,22.91,2.81"/>
                        <path class="cls-3" d="M37.44,1.08h158.1a32.31,32.31,0,0,1,32.31,32.31h0A32.32,32.32,0,0,1,195.54,65.7"/>
                        <path class="cls-1"
                              d="M195.54,65.7H114.46V1.08h81.08a32.31,32.31,0,0,1,32.31,32.31h0A32.32,32.32,0,0,1,195.54,65.7Z"/>

                            <line class="cls-4" x1="161.82" y1="65.7" x2="114.46" y2="65.7"/>

                            <path class="cls-5" d="M114.46,1.08h81.08a32.31,32.31,0,0,1,32.31,32.31h0A32.32,32.32,0,0,1,195.54,65.7"/>
                            <path class="cls-7"
                                  d="M167.83,51H156.15l-2.31-10.54a3.24,3.24,0,0,0-1-1.93,3.48,3.48,0,0,0-2.09-.49h-3.44V51h-11V15.54q5.25-.51,15.07-.51,8,0,11.5,2.36t3.47,8.44q0,7.71-7.2,8.43v.31q4.83.61,5.81,5.56L167.83,51ZM147.36,30.2h3.85a5,5,0,0,0,3.22-.72,4,4,0,0,0,.8-2.93c0-1.48-.27-2.45-.8-2.93a5,5,0,0,0-3.22-.72h-3.85v7.3Zm55-14.66V36.37q0,8.49-3.39,11.93t-11.73,3.45q-9,0-12.65-3.45t-3.65-11.93V15.54h11.16V36.37q0,4.27.93,5.68c.61,1,1.83,1.42,3.65,1.42s3-.47,3.6-1.42.92-2.83.92-5.68V15.54Z"/>

                            <line class="cls-8" x1="114.46" y1="11.24" x2="114.46" y2="55.54"/>
                        </a>
                        <a xlink:href="/kk" data-name="kk" onclick="setCookie('modal', 'true', 33);" target="_top">

                        <path class="cls-1"
                              d="M114.46,65.7H33.39A32.31,32.31,0,0,1,1.08,33.39h0A32.3,32.3,0,0,1,33.39,1.08h81.07Z"/>
                        <path class="cls-2" d="M114.46,65.7H33.39A32.31,32.31,0,0,1,1.08,33.39h0A32.33,32.33,0,0,1,22.91,2.81"/>
                        <line class="cls-6" x1="37.44" y1="1.08" x2="114.46" y2="1.08"/>
                        <path class="cls-7"
                              d="M39.19,36.32H37.34a14.94,14.94,0,0,1,.41,3.24V51.13H26.59V15.65H37.75v8.94a19.28,19.28,0,0,1-.51,4.53h1.95L46.6,15.65h12L50.4,29.53a6.59,6.59,0,0,1-3.13,3.14v.2a6.45,6.45,0,0,1,1.87,1.37,8.07,8.07,0,0,1,1.67,2.13l8.28,14.76H46.7L39.19,36.32Zm49.12,7v7.82H60.12V43.31L75.45,23.46H60.64V15.65H87.79v7.81L72.47,43.31Z"/>
                        </a>

                    </g>
                </g>
            </svg>

        </div>
    </div>
    <script>
        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        var c = getCookie('modal')

        if(c==null) {

            $('svg [data-name="dd"]').hover(function() {
                $('svg [data-name="dd"] .cls-7').css('fill', '#CE0152');
                $('svg [data-name="dd"] .cls-1').css('fill', '#fff');
                $('svg [data-name="kk"] .cls-7').css('fill', '#1A215D');
            }, function() {

                $('svg [data-name="dd"] .cls-7').css('fill', '#fff');
                $('svg [data-name="dd"] .cls-1').css('fill', '#1aa6e0');
                $('svg [data-name="kk"] .cls-7').css('fill', '#fff');
            });
            $('svg [data-name="kk"]').hover(function() {
                $('svg [data-name="kk"] .cls-7').css('fill', '#CE0152');
                $('svg [data-name="kk"] .cls-1').css('fill', '#fff');
                $('svg [data-name="dd"] .cls-7').css('fill', '#1A215D');
            }, function() {

                $('svg [data-name="kk"] .cls-7').css('fill', '#fff');
                $('svg [data-name="kk"] .cls-1').css('fill', '#1aa6e0');
                $('svg [data-name="dd"] .cls-7').css('fill', '#fff');
            });
            $.fancybox.open({
                src: '#ls',
                afterClose: function (instance, current) {
                    setCookie('modal', 'true', 33);
                }
            });
        }
    </script>

    <style>
        .form-modal
        {
            width: 28.75rem;
            max-width: 100%;
        }
        svg [data-name="dd"] *
        {
            transition: fill .3s;
        }
        svg [data-name="kk"] *
        {
            transition: fill .3s;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <!--Only this page's scripts-->
    







    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
    <!-- Initialize Swiper -->
    <script>

        const players = Plyr.setup('.player');
        players.forEach(function(instance,index) {
            instance.on('play',function(){
                players.forEach(function(instance1,index1){
                    if(instance != instance1){
                        instance1.pause();
                    }
                });
            });
        });



    </script>

    <script>
        var splide = new Splide( '.splide', {
            type   : 'loop',
            padding: '20rem',
            start: 2,
        } );

        splide.mount();

        var splide2 = new Splide( '.mob_video', {
            type: 'loop',
            start: 2,
            perPage: 1,
            arrows:false,
            pagination:false,
            speed: 5,
        } );

        splide2.mount();
        $('.animation-item').each(function (index, item) {

            var svg = jQuery(item).attr('data-svg');
            console.log(jQuery(item).attr('data-svg'));
            $(item).load(svg);

        });

        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        $('.player-controls').click(function(){
            $(this).hide();
            console.log($(this).siblings('video'));
            $(this).siblings('video').play();

        })
        function animationSvg(el)
        {
            var element_point = $('.animation-item').eq(0).offset().top; // положение элемента относительно начала страницы
            var element_point2 = $('.animation-item').eq(1).offset().top;
            var element_point3 = $('.animation-item').eq(3).offset().top;
            var element_point4 = $('.animation-item').eq(4).offset().top;
            var element_animated = false; // чтобы анимация происходила только один раз, используем эту переменную-флаг
            var animate_delay = 600; // задержка анимации (через 100 пикселей)

            $(window).scroll(function() {
                // проверяем, прокрутили ли страницу до элемента
                console.log($(window).scrollTop() + window.innerHeight + " el " + (element_point + $('.animation-item').eq(0).height()));
                if ($(window).scrollTop() + window.innerHeight > element_point + $('.animation-item').eq(0).height()) {
                    $('.animation-item:eq(0) svg [data-name="transparent-layer"]').attr('style','opacity: 0 !important');
                    if ($(window).scrollTop() + window.innerHeight > element_point + $('.animation-item').eq(0).height() * 2)
                        $('.animation-item:eq(0) svg [data-name="transparent-layer"]').attr('style','opacity: 0.7 !important; fill:white');
                }
                else
                    $('.animation-item:eq(0) svg [data-name="transparent-layer"]').attr('style','opacity: 0.7 !important; fill:white');


                if ($(window).scrollTop() + window.innerHeight > element_point2 + $('.animation-item').eq(1).height()) {
                    $('.animation-item:eq(1) svg [data-name="transparent-layer"]').attr('style','opacity: 0 !important');
                    if ($(window).scrollTop() + window.innerHeight > element_point2 + $('.animation-item').eq(1).height() * 2)
                        $('.animation-item:eq(1) svg [data-name="transparent-layer"]').attr('style','opacity: 0.7 !important; fill:white');
                }
                else
                    $('.animation-item:eq(1) svg [data-name="transparent-layer"]').attr('style','opacity: 0.7 !important; fill:white');

                if ($(window).scrollTop() + window.innerHeight > element_point3 + $('.animation-item').eq(2).height()) {
                    $('.animation-item:eq(3) svg [data-name="transparent-layer"]').attr('style','opacity: 0 !important');
                }
                if ($(window).scrollTop() + window.innerHeight > element_point4 + $('.animation-item').eq(3).height()) {
                    $('.animation-item:eq(4) svg [data-name="transparent-layer"]').attr('style','opacity: 0 !important');
                }
            });

        }
        var Visible = function (target,target_svg) {
            // Все позиции элемента
            var targetPosition = {
                    top: window.pageYOffset + target.getBoundingClientRect().top,
                    left: window.pageXOffset + target.getBoundingClientRect().left,
                    right: window.pageXOffset + target.getBoundingClientRect().right,
                    bottom: window.pageYOffset + target.getBoundingClientRect().bottom
                },
                // Получаем позиции окна
                windowPosition = {
                    top: window.pageYOffset,
                    left: window.pageXOffset,
                    right: window.pageXOffset + document.documentElement.clientWidth,
                    bottom: window.pageYOffset + document.documentElement.clientHeight
                };

            if (targetPosition.bottom > windowPosition.top && // Если позиция нижней части элемента больше позиции верхней чайти окна, то элемент виден сверху
                targetPosition.top < windowPosition.bottom && // Если позиция верхней части элемента меньше позиции нижней чайти окна, то элемент виден снизу
                targetPosition.right > windowPosition.left && // Если позиция правой стороны элемента больше позиции левой части окна, то элемент виден слева
                targetPosition.left < windowPosition.right) { // Если позиция левой стороны элемента меньше позиции правой чайти окна, то элемент виден справа
                // Если элемент полностью видно, то запускаем следующий код
                setTimeout(function (){
                    target_svg.attr('style','opacity: 0 !important');
                }, 500);


            } else {
                // Если элемент не видно, то запускаем этот код
                target_svg.attr('style','opacity: 0.7 !important; fill:white');
            };
        };



        if ($(window).width() < 1200) {
            var element = document.querySelector('#bl1');
            var element2 = document.querySelector('#bl2');
            var element3 = document.querySelector('#bl3');
            var element4 = document.querySelector('#bl4');
            var element5 = document.querySelector('#bl5');
            // Запускаем функцию при прокрутке страницы
            window.addEventListener('scroll', function() {
                Visible (element, $('.animation-item:eq(0) svg [data-name="transparent-layer"]'));
                Visible (element2, $('.animation-item:eq(1) svg [data-name="transparent-layer"]'));
                Visible (element3, $('.animation-item:eq(2) svg [data-name="transparent-layer"]'));
                Visible (element4, $('.animation-item:eq(3) svg [data-name="transparent-layer"]'));
                Visible (element5, $('.animation-item:eq(4) svg [data-name="transparent-layer"]'));
            });

            // А также запустим функцию сразу. А то вдруг, элемент изначально видно
            Visible (element, $('.animation-item:eq(0) svg [data-name="transparent-layer"]'));
            Visible (element2, $('.animation-item:eq(1) svg [data-name="transparent-layer"]'));
            Visible (element3, $('.animation-item:eq(2) svg [data-name="transparent-layer"]'));
            Visible (element4, $('.animation-item:eq(3) svg [data-name="transparent-layer"]'));
            Visible (element5, $('.animation-item:eq(4) svg [data-name="transparent-layer"]'));
        }
    </script>
    <script src="<?php echo e(asset('assets/js/video.js')); ?>"></script>

    <script>

        // console.log(players)

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("app.layout.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\OpenServerLast\domains\salemhokei\resources\views/app/pages/home/index.blade.php ENDPATH**/ ?>