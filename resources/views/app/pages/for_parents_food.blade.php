@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.food"))

@section("content")
    <div style="background: url(/assets/img/pattern2.png), #EBF7FD;
    background-size: 1440px; opacity: .75;" class="main-wrapper__bg"></div>
    <section class="blue-title">
        <div class="container">
            <div class="title-block text-center">
                <h1 class="title-primary">{{ __("default.pages.for_parents.food") }}</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">

            <div class="white-block">
                <div class="plain-text plain-text__24">
                    {!! __("default.pages.for_parents.food_content") !!}
                </div>
            </div>
        </div>
    </section>

@endsection

@section("scripts")

@endsection
