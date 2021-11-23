@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.psychology"))

@section("content")
    <div style="background: url(/assets/img/pattern3.png), #EBF7FD;
    background-size: 30em; opacity: .75;" class="main-wrapper__bg"></div>

    <section class="blue-title">
        <div class="container">
            <div class="title-block text-center">
                <h1 class="title-primary">{{ __("default.pages.for_parents.psychology") }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="white-block">
                <div class="plain-text plain-text__24">
                    {!! __("default.pages.for_parents.psychology_content") !!}
                </div>
                <div class="slogan">
                    <img src="/assets/img/boy-icon.svg" alt="">
                    <div>
                        {!! __("default.pages.for_parents.psychology_outro") !!}
                    </div>
                    <img src="/assets/img/girl-icon.svg" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
