@extends("app.layout.index")

@section("title",__("default.site_name").' | '.$item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru'))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 50em; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/{{$lang}}"
                       title="{{ __("default.pages.main.title") }}">{{ __("default.pages.main.title") }}</a></li>
                <li><a href="/{{$lang}}/news"
                       title="{{ __("default.pages.articles.title") }}">{{ __("default.pages.articles.title") }}</a>
                </li>
                <li><span>{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</span></li>
            </ul>
            <article class="article">
                <div class="title-block">
                    <h1 class="title-primary">{!! $item->getAttribute('name_'.$lang) ?? $item->getAttribute('name_ru') !!}</h1>
                    <p class="article__date">{{ __("default.pages.albums.published") }}
                        : {{date('d.m.Y', strtotime($item->published_at))}}</p>
                </div>

                <div class="margin-50">
                    <div class="content">
                        <div class="row row--multiline">
                            @foreach($photos as $photo)
                                <div class="col-xs-6 col-sm-4 col-md-3">
                                    <a href="{{$photo->avatar}}" title="" data-fancybox="gallery"
                                       class="gallery-item"><img src="{{$photo->avatar}}" alt=""></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="share">
                    <span>{{ __("default.pages.articles.share") }}:</span>
                    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="https://yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,twitter,whatsapp,telegram"></div>
                </div>
            </article>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
