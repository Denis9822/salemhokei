@extends("admin.layout")

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>
    <link rel="stylesheet" href="/assets/admin/css/style.css" type="text/css" media="screen">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        .daterangepicker.single.ltr .ranges,
        .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css">
    <link rel="stylesheet" href="/assets/libs/fancybox/dist/jquery.fancybox.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.9/plyr.css" />
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/pages/">Все страницы</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/pages/" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Найти</button>
                            </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                @if (session('status'))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                @endif


                    <section class="col-10">
                        <div class="custom-container">

                            <!-- Required swiper-lazy class and image source specified in data-src attribute -->
                            <a href="#video1" data-fancybox="" class="roles-item">
                                <video class="player" playsinline
                                       poster="{{asset('img/' . $textItems->firstWhere('element_id', 'play_video_content_' . app()->getLocale())->getImageFileName()) }}"
                                       controls
                                       src="{{asset('videos/' . $textItems->firstWhere('element_id', 'play_video_content_' . app()->getLocale())->getVideoFileName()) }}"></video>
                            </a>

                        </div>
                    </section>



            </div>
        </div>
    </div>
    <style>

        video {
            width: 100%;
            height: 37.1vw !important;
        }
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
        }
        .plyr--stopped.plyr__poster-enabled .plyr__poster
        {

        }
        .mt-3
        {
            margin-top: 20px;
        }
        .progress-wrp
        {
            display: flex;
        }
        </style>
{{--    @include("admin.components.modals.hockey")--}}
    @include("admin.components.modals.play")
@endsection


@section('scripts')
    <script src="/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/admin/js/scripts.js"></script>
    <script src="/assets/admin/js/upload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.9/plyr.js"></script>
    <script>
        $(document).ready(function() {
            // $(".video-upload-input").select2({
            //     tags: true
            // });
            const players = Plyr.setup('.player');

            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function(e) {
                var inputTarget = e.target;
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);

                var file = $(this)[0].files[0];

                var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif|\.svg|\.webp)$/i;

                if (!allowedExtensions.exec(file.name)) {

                    var upload = new Upload(file, '{{route('video.store')}}', input );
                    upload.doUpload();
                }
                else
                {
                    var upload = new Upload(file, '{{route('image.store')}}', input );
                    upload.doUploadImage();
                }

            });

            $(':file').on('fileselect', function(event, numFiles, label) {
                console.log(event, numFiles, label)
                $(".progress-wrp").css({visibility: 'visible'});
            });

        });

        var saveText = function(e){
            console.log(e.target);
            if (e.target.getAttribute('contenteditable') == "false") {
                e.target.setAttribute('contenteditable',true);
            } else {

                var contextText = e.target.textContent;

                // send request
                $.ajax({
                    dataType: 'json',
                    type: 'PUT',
                    url: e.target.getAttribute('data-url'),
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    data: JSON.stringify({content: contextText}),
                    contentType: 'application/json; charset=utf-8',
                    success: function(data) { //change spelling here
                        console.log(data);
                        e.target.setAttribute('contenteditable',false);
                    },
                    error: function() {
                        console.log("error again!");
                        alert('Пожалуйста, введите только текст!');
                    }

                });
            }
        }

        $( "#goal_keeper__content_ru" ).first().dblclick(saveText);
        $( "#goal_keeper__content_kk" ).first().dblclick(saveText);
        $( "#goal_keeper__title_kk" ).first().dblclick(saveText);
        $( "#goal_keeper__title_ru" ).first().dblclick(saveText);

        $( "#forwarder__title_ru" ).first().dblclick(saveText);
        $( "#forwarder__title_kk" ).first().dblclick(saveText);
        $( "#forwarder__content_ru" ).first().dblclick(saveText);
        $( "#forwarder__content_kk" ).first().dblclick(saveText);

        $( "#defender__title_ru" ).first().dblclick(saveText);
        $( "#defender__title_kk" ).first().dblclick(saveText);
        $( "#defender__content_ru" ).first().dblclick(saveText);
        $( "#defender__content_kk" ).first().dblclick(saveText);

        $( "#equipment_bib__title_ru" ).first().dblclick(saveText);
        $( "#equipment_bib__title_kk" ).first().dblclick(saveText);
        $( "#equipment_bib__content_ru" ).first().dblclick(saveText);
        $( "#equipment_bib__content_kk" ).first().dblclick(saveText);

        $( "#equipment_pads__title_ru" ).first().dblclick(saveText);
        $( "#equipment_pads__title_kk" ).first().dblclick(saveText);
        $( "#equipment_pads__content_ru" ).first().dblclick(saveText);
        $( "#equipment_pads__content_kk" ).first().dblclick(saveText);

        $( "#equipment_shields__title_ru" ).first().dblclick(saveText);
        $( "#equipment_shields__title_kk" ).first().dblclick(saveText);
        $( "#equipment_shields__content_ru" ).first().dblclick(saveText);
        $( "#equipment_shields__content_kk" ).first().dblclick(saveText);

        $( "#neck_protection__title_ru" ).first().dblclick(saveText);
        $( "#neck_protection__title_kk" ).first().dblclick(saveText);
        $( "#neck_protection__content_ru" ).first().dblclick(saveText);
        $( "#neck_protection__content_kk" ).first().dblclick(saveText);

        $( "#equipment_jersey__title_ru" ).first().dblclick(saveText);
        $( "#equipment_jersey__title_kk" ).first().dblclick(saveText);
        $( "#equipment_jersey__content_ru" ).first().dblclick(saveText);
        $( "#equipment_jersey__content_kk" ).first().dblclick(saveText);

        $( "#equipment_gaiters__title_ru" ).first().dblclick(saveText);
        $( "#equipment_gaiters__title_kk" ).first().dblclick(saveText);
        $( "#equipment_gaiters__content_ru" ).first().dblclick(saveText);
        $( "#equipment_gaiters__content_kk" ).first().dblclick(saveText);

        $( "#equipment_helmet__title_ru" ).first().dblclick(saveText);
        $( "#equipment_helmet__title_kk" ).first().dblclick(saveText);
        $( "#equipment_helmet__content_ru" ).first().dblclick(saveText);
        $( "#equipment_helmet__content_kk" ).first().dblclick(saveText);

        $( "#equipment_gloves__title_ru" ).first().dblclick(saveText);
        $( "#equipment_gloves__title_kk" ).first().dblclick(saveText);
        $( "#equipment_gloves__content_ru" ).first().dblclick(saveText);
        $( "#equipment_gloves__content_kk" ).first().dblclick(saveText);

        $( "#equipment_stick__title_ru" ).first().dblclick(saveText);
        $( "#equipment_stick__title_kk" ).first().dblclick(saveText);
        $( "#equipment_stick__content_ru" ).first().dblclick(saveText);
        $( "#equipment_stick__content_kk" ).first().dblclick(saveText);

        $( "#equipment_shorts__title_ru" ).first().dblclick(saveText);
        $( "#equipment_shorts__title_kk" ).first().dblclick(saveText);
        $( "#equipment_shorts__content_ru" ).first().dblclick(saveText);
        $( "#equipment_shorts__content_kk" ).first().dblclick(saveText);

        $( "#equipment_skates__title_ru" ).first().dblclick(saveText);
        $( "#equipment_skates__title_kk" ).first().dblclick(saveText);
        $( "#equipment_skates__content_ru" ).first().dblclick(saveText);
        $( "#equipment_skates__content_kk" ).first().dblclick(saveText);

        $( "#hockey_goal__title_ru" ).first().dblclick(saveText);
        $( "#hockey_goal__title_kk" ).first().dblclick(saveText);
        $( "#hockey_goal__content_ru" ).first().dblclick(saveText);
        $( "#hockey_goal__content_kk" ).first().dblclick(saveText);

        $( "#referee_field__title_ru" ).first().dblclick(saveText);
        $( "#referee_field__title_kk" ).first().dblclick(saveText);
        $( "#referee_field__content_ru" ).first().dblclick(saveText);
        $( "#referee_field__content_kk" ).first().dblclick(saveText);

        $( "#washer_field__title_ru" ).first().dblclick(saveText);
        $( "#washer_field__title_kk" ).first().dblclick(saveText);
        $( "#washer_field__content_ru" ).first().dblclick(saveText);
        $( "#washer_field__content_kk" ).first().dblclick(saveText);

        $( "#scoreboard__title_ru" ).first().dblclick(saveText);
        $( "#scoreboard__title_kk" ).first().dblclick(saveText);
        $( "#scoreboard__content_ru" ).first().dblclick(saveText);
        $( "#scoreboard__content_kk" ).first().dblclick(saveText);

        $( "#ice_machine__title_ru" ).first().dblclick(saveText);
        $( "#ice_machine__title_kk" ).first().dblclick(saveText);
        $( "#ice_machine__content_ru" ).first().dblclick(saveText);
        $( "#ice_machine__content_kk" ).first().dblclick(saveText);

        $( "#tribune__title_ru" ).first().dblclick(saveText);
        $( "#tribune__title_kk" ).first().dblclick(saveText);
        $( "#tribune__content_ru" ).first().dblclick(saveText);
        $( "#tribune__content_kk" ).first().dblclick(saveText);

        $( "#bench__title_ru" ).first().dblclick(saveText);
        $( "#bench__title_kk" ).first().dblclick(saveText);
        $( "#bench__content_ru" ).first().dblclick(saveText);
        $( "#bench__content_kk" ).first().dblclick(saveText);

        $( "#penalty_box__title_ru" ).first().dblclick(saveText);
        $( "#penalty_box__title_kk" ).first().dblclick(saveText);
        $( "#penalty_box__content_ru" ).first().dblclick(saveText);
        $( "#penalty_box__content_kk" ).first().dblclick(saveText);

        $( "#zone_a__title_ru" ).first().dblclick(saveText);
        $( "#zone_a__title_kk" ).first().dblclick(saveText);
        $( "#zone_a__content_ru" ).first().dblclick(saveText);
        $( "#zone_a__content_kk" ).first().dblclick(saveText);

        $( "#zone_c__title_ru" ).first().dblclick(saveText);
        $( "#zone_c__title_kk" ).first().dblclick(saveText);
        $( "#zone_c__content_ru" ).first().dblclick(saveText);
        $( "#zone_c__content_kk" ).first().dblclick(saveText);

        $( "#zone_b__title_ru" ).first().dblclick(saveText);
        $( "#zone_b__title_kk" ).first().dblclick(saveText);
        $( "#zone_b__content_ru" ).first().dblclick(saveText);
        $( "#zone_b__content_kk" ).first().dblclick(saveText);

        $( "#hockey_block_desc_4_kk" ).first().dblclick(saveText);
        $( "#hockey_block_desc_4_ru" ).first().dblclick(saveText);


        $( "#hockey_infrastructure_title_kk" ).first().dblclick(saveText);
        $( "#hockey_infrastructure_title_ru" ).first().dblclick(saveText);

    </script>
@endsection
