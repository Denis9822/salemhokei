@extends("admin.layout")

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>
    <link rel="stylesheet" href="/assets/admin/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/assets/css/video.css" type="text/css" media="screen">
    <style>
        .daterangepicker.single.ltr .ranges,
        .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>

    <link rel="stylesheet" href="/assets/libs/fancybox/dist/jquery.fancybox.min.css" type="text/css" media="screen"/>

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


                <section>
                    <div class="custom-container">
                        <div class="plain-text plain-text__24 pspoilerlain-text__thin"
                             data-fancybox="map_desc" href="#what_to_from_page_description"
                        >
                            {{--                {!! __("default.pages.faq.faq_annotation") !!}--}}
                            {!! $textItems->firstWhere('element_id', 'what_to_from_page_description_' . app()->getLocale())->content !!}
                        </div>

                        @if($lang == 'kk')
                            <div class="margin-50"><img src="/assets/img/how-to-start_KZ.svg" style="width: 100%"
                                                        alt=""></div>
                        @else
                            <div class="margin-50"><img src="/assets/img/how-to-start.svg" style="width: 100%" alt="">
                            </div>
                        @endif

                        <div class="spoilers spoilers--independent">
                            <div class="spoiler" >
                                <div class="spoiler__title" >
                                    <span>
                                    {!! $textItems->firstWhere('element_id', 'how_register_a_child_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#how_register_a_child" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                    src="{{asset('videos/' . $textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                    class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                    {!! $textItems->firstWhere('element_id', 'what_age_a_child_to_give_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#what_age_a_child_to_give" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                        {!! $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#how_to_determine_child_to_become_hockey_player" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                        {!! $textItems->firstWhere('element_id', 'who_conducts_classess_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#who_conducts_classess" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                        {!! $textItems->firstWhere('element_id', 'what_documents_are_required_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#what_documents_are_required" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                    {!! $textItems->firstWhere('element_id', 'where_to_buy_equipments_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#where_to_buy_equipments" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="spoiler">
                                <div class="spoiler__title">
                                    <span>
                                    {!! $textItems->firstWhere('element_id', 'not_found_answers_' . app()->getLocale())->content !!}
                                    </span>
                                </div>
                                <div class="spoiler__desc" href="#not_found_answers" data-fancybox="">
                                    <div class="plain-text plain-text__20">
                                        {!! $textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->content !!}
                                        @if($textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->video_id != null)
                                            <div class="video-player">
                                                <video
                                                        src="{{asset('videos/' . $textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->getVideoFileName()) }}"
                                                        class="video"></video>
                                                <div class="player-controls">
                                                    <button class="play-button" title="Play">►</button>
                                                    <div class='fullscreen'>
                                                        <svg width="30" height="22" viewBox="0 0 30 22" fill="none"
                                                             xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                    d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z"
                                                                    transform="translate(2 2)" fill="white"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>

    @include("admin.components.modals.faq")
@endsection


@section('scripts')

    <script src="/assets/libs/maskedinput/maskedinput.js"></script>
    <script src="/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/libs/slick-carousel/slick/slick.js"></script>
    <script src="/assets/libs/chosen/chosen.jquery.js"></script>
    <script src="/assets/admin/js/upload.js"></script>
    <script src="/assets/libs/fancybox/dist/jquery.fancybox.min.js"></script>
    <script src="/assets/admin/js/scripts.js"></script>

    <script>
        $(document).ready(function () {
            // $(".video-upload-input").select2({
            //     tags: true
            // });

            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function (e) {
                var inputTarget = e.target;
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                input.trigger('fileselect', [numFiles, label]);

                var file = $(this)[0].files[0];
                var upload = new Upload(file, '{{route('video.store')}}', input);

                // maby check size or type here with upload.getSize() and upload.getType()

                // execute upload
                upload.doUpload();


            });

            $(':file').on('fileselect', function (event, numFiles, label) {
                console.log(event, numFiles, label)
                $(".progress-wrp").css({visibility: 'visible'});
            });

        });
        var saveText = function (e) {
            console.log(e.target);
            if (e.target.getAttribute('contenteditable') == "false") {
                e.target.setAttribute('contenteditable', true);
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
                    success: function (data) { //change spelling here
                        console.log(data);
                        e.target.setAttribute('contenteditable', false);
                    },
                    error: function () {
                        console.log("error again!");
                        alert('Пожалуйста, введите только текст!');
                    }

                });
            }
        }

        $("#what_to_from_page_description_ru").first().dblclick(saveText);
        $("#what_to_from_page_description_kk").first().dblclick(saveText);

        $("#how_register_a_child_ru").first().dblclick(saveText);
        $("#how_register_a_child_kk").first().dblclick(saveText);
        $("#how_register_a_child_text_ru").first().dblclick(saveText);
        $("#how_register_a_child_text_kk").first().dblclick(saveText);

        $("#what_age_a_child_to_give_ru").first().dblclick(saveText);
        $("#what_age_a_child_to_give_kk").first().dblclick(saveText);
        $("#what_age_a_child_to_give_text_ru").first().dblclick(saveText);
        $("#what_age_a_child_to_give_text_kk").first().dblclick(saveText);

        $("#how_to_determine_child_to_become_hockey_player_ru").first().dblclick(saveText);
        $("#how_to_determine_child_to_become_hockey_player_kk").first().dblclick(saveText);
        $("#how_to_determine_child_to_become_hockey_player_text_ru").first().dblclick(saveText);
        $("#how_to_determine_child_to_become_hockey_player_text_kk").first().dblclick(saveText);

        $("#who_conducts_classess_ru").first().dblclick(saveText);
        $("#who_conducts_classess_kk").first().dblclick(saveText);
        $("#who_conducts_classess_text_ru").first().dblclick(saveText);
        $("#who_conducts_classess_text_kk").first().dblclick(saveText);

        $("#what_documents_are_required_ru").first().dblclick(saveText);
        $("#what_documents_are_required_kk").first().dblclick(saveText);
        $("#what_documents_are_required_text_ru").first().dblclick(saveText);
        $("#what_documents_are_required_text_kk").first().dblclick(saveText);

        $("#where_to_buy_equipments_ru").first().dblclick(saveText);
        $("#where_to_buy_equipments_kk").first().dblclick(saveText);
        $("#where_to_buy_equipments_text_ru").first().dblclick(saveText);
        $("#where_to_buy_equipments_text_kk").first().dblclick(saveText);

        $("#not_found_answers_ru").first().dblclick(saveText);
        $("#not_found_answers_kk").first().dblclick(saveText);
        $("#not_found_answers_text_ru").first().dblclick(saveText);
        $("#not_found_answers_text_kk").first().dblclick(saveText);


    </script>
@endsection
