@extends("app.layout.index")

@section('styles')

    <link rel="stylesheet" href="{{asset('assets/css/video.css')}}">
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
        @media screen and (max-width: 1400px) {
            .banner video
            {

                height: 30.7vw;
            }
        }
        @media screen and (max-width: 1200px) {
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
        @media screen and (max-width: 400px) {

            .anim_mob svg [data-name="transparent-layer"]
            {
                opacity: 0 !important;
                transition: 2s !important;
            }
        }
    </style>
@endsection

@section('title', __('default.site_name'))



@section('content')
    <div style="background-image: url(/assets/img/pattern1.png);
                                background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>

        <section class="banner">

            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="pc_video splide mySwiper">
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getImageFileName()) }}"  controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getVideoFileName()) }}"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getVideoFileName()) }}"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getVideoFileName()) }}"
                                   ></video>

                        </div>
                        <div class="splide__slide">
                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <video class="player" playsinline poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getImageFileName()) }}"  controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getVideoFileName()) }}"
                                   ></video>
                        </div>
                    </ul>
                </div>
            </div>
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="splide mob_video">
                <div class="splide__track">
                    <ul class="splide__list">
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video1_content_' . app()->getLocale())->getVideoFileName()) }}"></video>
                        </div>

                        <div class="splide__slide">
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video2_content_' . app()->getLocale())->getVideoFileName()) }}"></video>
                        </div>
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video3_content_' . app()->getLocale())->getVideoFileName()) }}"></video>
                        </div>
                        <div class="splide__slide">
                            <video class="player" playsinline  poster="{{asset('img/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getImageFileName()) }}" controls src="{{asset('videos/' . $textItems->firstWhere('element_id', 'video4_content_' . app()->getLocale())->getVideoFileName()) }}"></video>
                        </div>
                    </ul>
                </div>
            </div>
        </section>

    {{-- <div class="rink-bg"> --}}
    {{-- <img src="/assets/img/ice-rink.svg" alt=""> --}}
    {{-- </div> --}}

    <section>
        <div class="container starting_area_section">



            @if($lang == 'kk')

                <div class="margin-50">
                    <a id="bl1" href="/{{ $lang }}/" class="anim_mob d-block h-75 animation-item" data-svg="{{asset('images/animations/kk/01.svg')}}">
                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl2" href="/{{ $lang }}/faq" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/kk/02.svg')}}">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl3" href="/{{ $lang }}/hockey" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/kk/03.svg')}}" >

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl4" href="/{{ $lang }}/schools" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/kk/04.svg')}}">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl5" href="/{{ $lang }}/play" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/kk/05.svg')}}">

                    </a>
                </div>
            @else
                <div class="margin-50">
                    <a id="bl1" href="/{{ $lang }}/" class="anim_mob d-block h-75 animation-item" data-svg="{{asset('images/animations/ru/01.svg')}}">
                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl2" href="/{{ $lang }}/faq" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/ru/02.svg')}}">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl3" href="/{{ $lang }}/hockey" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/ru/03.svg')}}" >

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl4" href="/{{ $lang }}/schools" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/ru/04.svg')}}">

                    </a>
                </div>
                <div class="margin-50">
                    <a id="bl5" href="/{{ $lang }}/play" class="d-block h-75 animation-item" data-svg="{{asset('images/animations/ru/05.svg')}}">

                    </a>
                </div>
{{--                <div class="margin-50">--}}
{{--                    <a href="https://play.google.com/store/apps/" class="d-block h-75">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="165" height="93" viewBox="0 0 165 93">--}}
{{--                            <circle cx="27.5" cy="84.57" r="8.43" fill="#e8eff7"/>--}}
{{--                            <circle cx="144.21" cy="66.5" r="8.43" fill="#b0cb1f"/>--}}
{{--                            <path--}}
{{--                                d="M127.07,34.62S132.68,2.24,104,.32C93.71.3,89.59,8.49,87.94,12S76.22,23.43,68.45,15,41,5.29,34.82,15.53s1,21.52.36,27.06S28.76,64.71,38.58,74s22.77-2.61,29.74-1.77c4.76.57,12.74,14.31,29.79,14.55,18.82.27,38.56-11.61,35.16-32.8C131.57,43.37,125.82,43.85,127.07,34.62Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#00adee"/>--}}
{{--                            <path--}}
{{--                                d="M97.37,1.64C91.81,4.1,89.18,9.36,87.94,12c-1.65,3.48-11.72,11.46-19.49,3S41,5.29,34.82,15.53c-4.48,7.4-2,15.36-.46,21.29"--}}
{{--                                transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                stroke-linejoin="round"/>--}}
{{--                            <path d="M127.07,34.62a47,47,0,0,0-1.18-17.81c-1.88-6-5.76-11.93-13.54-14.8"--}}
{{--                                  transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"/>--}}
{{--                            <path--}}
{{--                                d="M79.35,80.15a32,32,0,0,0,18.76,6.6c18.82.27,38.56-11.61,35.16-32.8a21.75,21.75,0,0,0-2.07-6.61"--}}
{{--                                transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                stroke-linejoin="round"/>--}}
{{--                            <path d="M33.35,52.79c-1,7-.83,15.47,5.23,21.18,5.17,4.87,11.21,3.89,16.78,2"--}}
{{--                                  transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round"/>--}}
{{--                            <circle cx="150.39" cy="33.03" r="14.61" fill="#e8eff7"/>--}}
{{--                            <circle cx="12.89" cy="46.21" r="10.49" fill="#a3d9f6"/>--}}
{{--                            <path--}}
{{--                                d="M47.23,37.19a13.76,13.76,0,0,1-4.8.65c-4.54,0-6.21-1.86-6.21-7.08s1.67-7.08,6.21-7.08a14.79,14.79,0,0,1,4.5.53l-.31,3.14c-1.39,0-2.3,0-4.19,0-1.35,0-1.68.67-1.68,3.45s.33,3.45,1.68,3.45a40.42,40.42,0,0,0,4.48-.16Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M54.16,28.62c4.12,0,5.47,1,5.47,4.56s-1.44,4.58-4.7,4.58c-2.73,0-4.28,0-6.09-.16h-.12V23.92h4.33v4.7Zm0,6.17c1,0,1.15-.32,1.15-1.77s-.18-1.8-1.15-1.8H53.05v3.57ZM65.41,37.6H61.08V23.92h4.33Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M67.61,27a3,3,0,0,1,3.2-3.11,51.58,51.58,0,0,1,6.64.27l-.2,3h-4.5a.74.74,0,0,0-.83.71V37.6H67.61Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M78.64,23.92a52.46,52.46,0,0,1,5.8-.2c4.34,0,5.67,1,5.67,4.66S88.78,33,85,33A17.87,17.87,0,0,1,83,32.88V37.6H78.64Zm5.7,6c1.17,0,1.47-.32,1.47-1.59s-.3-1.63-1.47-1.63H83V30Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M94.74,34.65l-.7,3H89.66L93.21,25a1.46,1.46,0,0,1,1.45-1.11h3.9A1.46,1.46,0,0,1,100,25l3.55,12.57H99.18l-.69-3Zm2.38-5.95a14.19,14.19,0,0,1-.24-1.57h-.54c-.06.5-.14,1.07-.23,1.57l-.68,2.93h2.36Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M112.73,37.6V31.31a12.82,12.82,0,0,1,.22-2.12h-.14A12,12,0,0,1,112,31.3l-3.35,6.3h-4.11V23.92h4.09V30a15,15,0,0,1-.22,2.22h.14a12.44,12.44,0,0,1,.87-2.11l3.33-6.18h4.09V37.6Zm1.65-18c.32,1.71-1.09,3.43-3.53,3.43s-3.87-1.72-3.55-3.43h2.52c-.16,1.23.25,1.53,1,1.53s1.17-.3,1-1.53Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <path--}}
{{--                                d="M150.24,16.46a1.78,1.78,0,0,0-2.5.34l-23,30.05L112.41,63l-2.15,2.68-2,2.5a4.8,4.8,0,0,1-.58.61,5.43,5.43,0,0,1-1.53,1,5.2,5.2,0,0,1-3.69.11L92,66.24a4.17,4.17,0,1,0-2.59,7.93l9.6,3a8.46,8.46,0,0,0,9.22-2.93l.32-.41,1-1.33L110,72l2.14-2.79,14.43-18.85,24-31.39A1.79,1.79,0,0,0,150.24,16.46Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#ffae00"/>--}}
{{--                            <path d="M110,72l2.14-2.79-1.86-3.58-2,2.5a4.8,4.8,0,0,1-.58.61l2,3.76Z"--}}
{{--                                  transform="translate(0.1 -0.32)" fill="#052460"/>--}}
{{--                            <polygon--}}
{{--                                points="126.65 50.04 124.83 46.53 112.51 62.63 110.36 65.3 112.22 68.89 126.65 50.04"--}}
{{--                                fill="#ce005b"/>--}}
{{--                            <polygon points="99.77 77.17 97.97 76.14 101.83 69.27 103.53 70.31 99.77 77.17"--}}
{{--                                     fill="#052460"/>--}}
{{--                            <polygon--}}
{{--                                points="97.96 68.07 99.81 68.83 97.08 76.14 95.2 75.39 94.18 75.2 93.23 75.05 93.32 71.22 91.96 74.54 90.14 73.77 93.12 66.5 94.16 66.96 95.56 67 95.54 67.46 97.46 67.87 96.65 71.51 97.96 68.07"--}}
{{--                                fill="#052460"/>--}}
{{--                            <path--}}
{{--                                d="M14.55,16.46a1.79,1.79,0,0,1,2.51.34l23,30.05L52.39,63l2.15,2.68,2,2.5a5.62,5.62,0,0,0,.58.61,5.43,5.43,0,0,0,1.53,1,5.2,5.2,0,0,0,3.69.11l10.4-3.56a4.17,4.17,0,1,1,2.6,7.93l-9.61,3a8.46,8.46,0,0,1-9.22-2.93l-.32-.41-1-1.33-.38-.5-2.14-2.79L38.24,50.36,14.21,19A1.79,1.79,0,0,1,14.55,16.46Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#ffae00"/>--}}
{{--                            <path d="M54.81,72l-2.14-2.79,1.87-3.58,2,2.5a5.62,5.62,0,0,0,.58.61L55.19,72.5Z"--}}
{{--                                  transform="translate(0.1 -0.32)" fill="#052460"/>--}}
{{--                            <polygon points="38.35 50.04 40.17 46.53 52.49 62.63 54.64 65.3 52.78 68.89 38.35 50.04"--}}
{{--                                     fill="#ce005b"/>--}}
{{--                            <polygon points="65.23 77.17 67.03 76.14 63.17 69.27 61.47 70.31 65.23 77.17"--}}
{{--                                     fill="#052460"/>--}}
{{--                            <polygon--}}
{{--                                points="67.04 68.07 65.19 68.83 67.92 76.14 69.8 75.39 70.82 75.2 71.77 75.05 71.68 71.22 73.04 74.54 74.86 73.77 71.88 66.5 70.84 66.96 69.44 67 69.46 67.46 67.54 67.87 68.35 71.51 67.04 68.07"--}}
{{--                                fill="#052460"/>--}}
{{--                            <path d="M100,56.9H64.78V48.69H100Z" transform="translate(0.1 -0.32)" fill="#052460"/>--}}
{{--                            <path--}}
{{--                                d="M74.53,61.4c-5.78-.82-9.75-2.53-9.75-4.5,0-2.79,7.89-8.21,17.62-8.21S100,54.11,100,56.9s-7.88,5-17.61,5a56,56,0,0,1-7.87-.53"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#052460"/>--}}
{{--                            <path--}}
{{--                                d="M68.55,45.58A43.45,43.45,0,0,1,82.4,43.66c9.73,0,17.61,2.25,17.61,5s-7.88,5-17.61,5-17.62-2.26-17.62-5c0-1.17,1.41-2.25,3.77-3.11"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#a3d9f6"/>--}}
{{--                            <path--}}
{{--                                d="M97.8,46.55c1.1.65,1.72,1.38,1.72,2.14,0,2.71-7.67,4.9-17.12,4.9s-17.13-2.19-17.13-4.9c0-1.23,1.6-2.36,4.23-3.22"--}}
{{--                                transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                stroke-linejoin="round" stroke-width="1"/>--}}
{{--                            <path d="M74,44.43a53.8,53.8,0,0,1,8.42-.63,57.12,57.12,0,0,1,6.48.36"--}}
{{--                                  transform="translate(0.1 -0.32)" fill="none" stroke="#052460" stroke-linecap="round"--}}
{{--                                  stroke-linejoin="round" stroke-width="1"/>--}}
{{--                            <path--}}
{{--                                d="M86.89,47.52a2,2,0,0,1-.56-.07A15,15,0,0,0,82.4,47a15.56,15.56,0,0,0-3.52.36,2.41,2.41,0,0,1-1.11,0c-.28-.09-.23-.24.11-.31a20.42,20.42,0,0,1,4.52-.46,19.5,19.5,0,0,1,5,.59c.31.09.31.24,0,.32A1.91,1.91,0,0,1,86.89,47.52Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#00adee"/>--}}
{{--                            <line x1="65.38" y1="48.37" x2="65.38" y2="56.82" fill="none" stroke="#052460"--}}
{{--                                  stroke-linecap="round" stroke-linejoin="round" stroke-width="1.01"/>--}}
{{--                            <path--}}
{{--                                d="M119.2,37.17a2.51,2.51,0,0,1-.8-1.87,2.39,2.39,0,0,1,.8-1.85,2.93,2.93,0,0,1,2.06-.73,2.87,2.87,0,0,1,2,.73,2.39,2.39,0,0,1,.8,1.85,2.48,2.48,0,0,1-.81,1.87,2.81,2.81,0,0,1-2,.76A2.87,2.87,0,0,1,119.2,37.17Zm-.77-17h5.67l-1,11.16h-3.78Z"--}}
{{--                                transform="translate(0.1 -0.32)" fill="#fff"/>--}}
{{--                            <polygon--}}
{{--                                points="29.13 17.99 26.69 17.55 24.94 19.31 24.61 16.86 22.4 15.74 24.63 14.66 25.01 12.21 26.72 14.01 29.17 13.61 27.99 15.79 29.13 17.99"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="74.86 12.98 72.72 12.37 71 13.79 70.92 11.57 69.04 10.37 71.13 9.61 71.69 7.46 73.06 9.21 75.28 9.07 74.04 10.91 74.86 12.98"--}}
{{--                                fill="none" stroke="#ffae00" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="154.75 57.71 152.43 56.19 149.87 57.23 150.6 54.56 148.81 52.44 151.58 52.31 153.05 49.95 154.03 52.55 156.72 53.21 154.55 54.95 154.75 57.71"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="133.76 85.61 132.18 85.62 131.29 86.92 130.8 85.42 129.29 84.98 130.56 84.05 130.51 82.47 131.79 83.39 133.28 82.86 132.79 84.36 133.76 85.61"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="62.25 84.69 60.15 83.63 58.09 84.76 58.45 82.43 56.74 80.81 59.06 80.44 60.07 78.32 61.15 80.41 63.48 80.71 61.82 82.38 62.25 84.69"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="18.13 68.89 15.89 69.06 14.77 71 13.92 68.93 11.73 68.46 13.44 67.01 13.21 64.78 15.11 65.96 17.16 65.05 16.63 67.23 18.13 68.89"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="29.17 50.86 27.69 50.37 26.45 51.3 26.46 49.74 25.18 48.85 26.67 48.38 27.12 46.89 28.03 48.16 29.59 48.13 28.66 49.39 29.17 50.86"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="142.25 39.4 141.04 38.95 139.98 39.69 140.04 38.4 139 37.62 140.25 37.28 140.67 36.05 141.38 37.13 142.68 37.15 141.87 38.16 142.25 39.4"--}}
{{--                                fill="none" stroke="#00376a" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                            <polygon--}}
{{--                                points="130.78 13.79 129.23 12.21 127.05 12.58 128.09 10.62 127.06 8.66 129.24 9.04 130.78 7.46 131.1 9.65 133.08 10.63 131.09 11.6 130.78 13.79"--}}
{{--                                fill="none" stroke="#ffae00" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                                stroke-width="0.76"/>--}}
{{--                        </svg>--}}
{{--                    </a>--}}
{{--                </div>--}}
            @endif

        </div>
    </section>


    {{-- <section>
      <div class="container">
        <h2 class="title-primary">{{ __('default.pages.main.articles_title') }}</h2>
        <div class="row row--multiline">
          @foreach ($articles as $article)
            <div class="col-md-4 col-sm-6">
              <a href="/{{ $lang }}/article/{{ $article->alias }}" title="" class="card">
                <div class="card__img">
                  <img src="{!! $article->avatar !!}" alt="">
                </div>
                <div class="card__date">{{ date('d.m.Y', strtotime($article->published_at)) }}</div>
                <h4 class="card__title">
                  {{ $article->getAttribute('name_' . $lang) ?? $article->getAttribute('name_ru') }}
                </h4>
                <span class="btn btn--arrow">{{ __('default.pages.main.detail_article') }}</span>
              </a>
            </div>
          @endforeach
        </div>
        <br>
        <br>
        <div class="text-center">
          <a href="/{{ $lang }}/news_articles" title="{{ __('default.pages.main.articles_all') }}"
            class="btn btn--arrow btn--red">{{ __('default.pages.main.articles_all') }}</a>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h2 class="title-primary">{{ __('default.pages.main.albums_title') }}</h2>
        <div class="row row--multiline">
          @foreach ($albums as $album)
            <div class="col-md-4 col-sm-6">
              <a href="/{{ $lang }}/album/{{ $album->id }}" title="" class="card card__type2">
                <div class="card__img">
                  <img src="{{ $album->avatar }}" alt="">
                </div>
                <div class="card__date">{{ date('d.m.Y', strtotime($album->published_at)) }}</div>
                <h4 class="card__title">{!! $album->getAttribute('name_' . $lang) ?? $album->getAttribute('name_ru') !!}</h4>
              </a>
            </div>
          @endforeach
        </div>
        <br>
        <br>
        <div class="text-center">
          <a href="/{{ $lang }}/news_albums" title="{{ __('default.pages.main.albums_all') }}"
            class="btn btn--arrow btn--red">{{ __('default.pages.main.albums_all') }}</a>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <h2 class="title-primary">{{ __('default.pages.main.videos_title') }}</h2>
        <div class="row row--multiline">
          @foreach ($videos as $video)
            <div class="col-sm-6">
              <a href="{!! $video->getAttribute('link_' . $lang) ?? $video->getAttribute('link_ru') !!}" data-fancybox title="" class="card card__type2">
                <div class="card__img video-cover">
                  <div class="video-cover__play"></div>
                  @php
                    $url = $video->getAttribute('link_' . $lang);
                    if (empty($video->getAttribute('link_' . $lang))) {
                        $url = $video->getAttribute('link_ru');
                    }
                    parse_str(parse_url($url, PHP_URL_QUERY), $vars);
                  @endphp
                  <img src="{{ 'https://img.youtube.com/vi/' . $vars['v'] . '/sddefault.jpg' }}" alt="">
                </div>
                <h4 class="card__title">{!! $video->getAttribute('name_' . $lang) ?? $video->getAttribute('name_ru') !!}</h4>
              </a>
            </div>
          @endforeach
        </div>
        <br>
        <br>
        <div class="text-center">
          <a href="/{{ $lang }}/news_videos" title="{{ __('default.pages.main.videos_all') }}"
            class="btn btn--arrow btn--red">{{ __('default.pages.main.videos_all') }}</a>
        </div>
      </div>
    </section> --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">


    <div id="ls" class="form-modal" style="display:none">
        <h4 class="title-primary text-center">
            {!! __('default.pages.main.modal_title') !!}
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
@endsection

@section('scripts')

    <!--Only this page's scripts-->
    {{--    <script src="{{asset('assets/js/JiSlider.js')}}"></script>--}}

{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            console.log(1)--}}
{{--           --}}
{{--        });--}}
{{--    </script>--}}
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
    <script src="{{asset('assets/js/video.js')}}"></script>

    <script>

        // console.log(players)

    </script>
@endsection
