@extends("app.layout.index")

@section("title",__("default.site_name").' | '.$item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/{{$lang}}"
                       title="{{ __("default.pages.main.title") }}">{{ __("default.pages.main.title") }}</a></li>
                <li><a href="/{{$lang}}/rinks" title="{{ __("default.pages.rollers.title") }}">{{ __("default.pages.rollers.title") }}</a></li>
                <li><span>{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</span></li>
            </ul>
            <article class="article">
                <div class="title-block">
                    <h1 class="title-primary">{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</h1>
                </div>


                <div class="row row--multiline">
                    <div class="col-sm-5 col-md-4">
                        <div class="article-sidebar margin-50">
                            <img src="{!! $item->avatar !!}" class="article__image article__image--school" alt="">
                            <div class="text-center">

                            </div>
                        </div>
                        <div class="share">
                            <span>{{ __("default.pages.schools.share") }}:</span>
                            <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                            <script src="https://yastatic.net/share2/share.js"></script>
                            <div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-8">
                        <div class="plain-text">
                            <p><strong>{!! $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru') !!}</strong></p>
                            {!! $item->getAttribute('annotation_'.$lang) ?? $item->getAttribute('annotation_ru') !!}<br>
                            {!! $item->getAttribute('description_'.$lang) ?? $item->getAttribute('description_ru') !!}
                        </div>
                    </div>
                </div>
                @if ($item->google_map != null || $item->yandex_map != null)
                    <div class="row mt-3">
                        @if($item->google_map != null)
                            <div class="col-sm-6" id="googleMap" style="height: 300px;">
                                <div class="mapd" style="width: 100%; height: 300px;">
                                    {!! $item->google_map !!}
                                </div>
                            </div>
                        @endif
                        @if($item->yandex_map != null)
                            <div class="col-sm-6" id="yandexMap" style="height: 300px;">
                                <div class="mapd" style="width: 100%; height: 300px;">
                                    {!! $item->yandex_map !!}
                                </div>
                            </div>
                        @endif
                    </div>
                @endif

            </article>
        </div>
    </section>

    <style>
        .mt-3
        {
            margin-top: 20px;
        }
        iframe
        {
            width: 100% !important;
            height: 100% !important;
        }
    </style>
@endsection

@section("scripts")

@endsection
