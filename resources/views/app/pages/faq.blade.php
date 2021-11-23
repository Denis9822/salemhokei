@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.whats_start"))

@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/video.css')}}">
@endsection


@section("content")
    <div style="background: url(/assets/img/pattern4.png);
    background-size: 1440px; opacity: .75;" class="main-wrapper__bg"></div>

    @include('app.layout.components.page-title')

    <section>
        <div class="container">
            <div class="plain-text plain-text__24 plain-text__thin">
{{--                {!! __("default.pages.faq.faq_annotation") !!}--}}
                {!! $textItems->firstWhere('element_id', 'what_to_from_page_description_' . app()->getLocale())->content !!}
            </div>

            @if($lang == 'kk')
                <div class="margin-50"><img src="/assets/img/how-to-start_KZ.svg" style="width: 100%" alt=""></div>
            @else
                <div class="margin-50"><img src="/assets/img/how-to-start.svg" style="width: 100%" alt=""></div>
            @endif

            <div class="spoilers spoilers--independent">
                <div class="spoiler">
                    <div class="spoiler__title">
                        <span>
                        {!! $textItems->firstWhere('element_id', 'how_register_a_child_' . app()->getLocale())->content !!}
                        </span>
                    </div>
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->video_id != null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'how_register_a_child_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'how_to_determine_child_to_become_hockey_player_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'what_age_a_child_to_give_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'who_conducts_classess_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc" >
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'what_documents_are_required_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'where_to_buy_equipments_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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
                    <div class="spoiler__desc">
                        <div class="plain-text plain-text__20">
                            {!! $textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->content !!}
                            @if($textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->video_id !== null)
                                <div class="video-player">
                                    <video src="{{asset('videos/' . $textItems->firstWhere('element_id', 'not_found_answers_text_' . app()->getLocale())->getVideoFileName()) }}"
                                           class="video"></video>
                                    <div class="player-controls">
                                        <button class="play-button" title="Play">►</button>
                                        <div class='fullscreen'>
                                            <svg width="30" height="22" viewBox="0 0 30 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0V-1.5H-1.5V0H0ZM0 18H-1.5V19.5H0V18ZM26 18V19.5H27.5V18H26ZM26 0H27.5V-1.5H26V0ZM1.5 6.54545V0H-1.5V6.54545H1.5ZM0 1.5H10.1111V-1.5H0V1.5ZM-1.5 11.4545V18H1.5V11.4545H-1.5ZM0 19.5H10.1111V16.5H0V19.5ZM24.5 11.4545V18H27.5V11.4545H24.5ZM26 16.5H15.8889V19.5H26V16.5ZM27.5 6.54545V0H24.5V6.54545H27.5ZM26 -1.5H15.8889V1.5H26V-1.5Z" transform="translate(2 2)" fill="white"/>
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

@endsection

@section('scripts')
    <script src="{{asset('assets/js/video.js')}}"></script>

    <script>
        var players = new VideoPlayer({'selector': '.video-player', autoplay: false});
        // console.log(players)
    </script>
@endsection
