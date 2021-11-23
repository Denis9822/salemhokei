@extends("app.layout.index")

@section("title",__("default.site_name"). ' | '. __("default.pages.articles.news_articles"))

@section("content")
    <div style="background-image: url(/assets/img/pattern1.png);
    background-size: 1440px; opacity: .5;" class="main-wrapper__bg"></div>
    <section>
        <div class="container">
            <div class="title-block">
                <ul class="breadcrumbs">
                    <li><a href="/{{$lang}}"
                           title="{{ __("default.pages.main.title") }}">{{ __("default.pages.main.title") }}</a></li>
                    <li><span>{{ __("default.pages.articles.title") }}</span></li>
                </ul>
                <h1 class="title-primary"><img src="/assets/img/circle-icon/news.svg" alt=""> <span>{{ __("default.pages.articles.title") }}</span>
                </h1>

                <div class="mobile-dropdown">
                    <div class="mobile-dropdown__title">{{ __("default.pages.articles.categories") }}</div>
                    <div class="mobile-dropdown__desc">
                        <div class="categories-list">
                            <a href="/{{$lang}}/news" title="{{ __("default.pages.articles.all_news") }}">{{ __("default.pages.articles.all_news") }}</a>
                            <a href="/{{$lang}}/news_articles" title="{{ __("default.pages.articles.news_articles") }}" class="active">{{ __("default.pages.articles.news_articles") }}</a>
                            <a href="/{{$lang}}/news_videos" title="{{ __("default.pages.articles.news_videos") }}">{{ __("default.pages.articles.news_videos") }}</a>
                            <a href="/{{$lang}}/news_albums" title="{{ __("default.pages.articles.news_albums") }}">{{ __("default.pages.articles.news_albums") }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="margin-50">
                <div class="row row--multiline">
                    @foreach($articles as $article)
                        <div class="col-sm-6 col-md-4">
                            <a href="/{{$lang}}/article/{{$article->alias}}" title="" class="card">
                                <div class="card__img">
                                    <img src="{{$article->avatar}}" alt="">
                                </div>
                                <div class="card__date">{{date('d.m.Y', strtotime($article->published_at))}}</div>
                                <h4 class="card__title">{!! $article->getAttribute('name_'.$lang) ?? $article->getAttribute('name_ru') !!}</h4>
                                <span class="btn btn--arrow btn--red">{{ __("default.pages.articles.detail_article") }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <ul class="pagination">
                {{ $articles->links('app.pages.paginate') }}
            </ul>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
