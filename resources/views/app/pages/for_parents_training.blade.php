@extends("app.layout.index")

@section("title",__("default.site_name").' | '.__("default.pages.for_parents.training"))

@section("content")
    <section>

        <section class="blue-title">
            <div class="container">
                <div class="title-block text-center">
                    <h1 class="title-primary">{{ __("default.pages.for_parents.training") }}</h1>
                </div>
            </div>
        </section>

        <section class="field-bg">
            <div class="container">
                <div class="training-steps">
                    <h2>
                {!! __("default.pages.for_parents.training_title") !!}
                    </h2>

                    <div class="steps text-center">
                        <div class="row row--multiline">
                            <div class="col-sm-4">
                                <div class="step step__blue">
                                    <div class="step__icon">
                                        <img src="/assets/img/step1.svg" alt="">
                                    </div>
                                    <div class="step__text">
                                        {!! __("default.pages.for_parents.step_one_content") !!}
                                    </div>
                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}} 1</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="step step__pink">
                                    <div class="step__icon">
                                        <img src="/assets/img/step2.svg" alt="">
                                    </div>
                                    <div class="step__text">
                                        {!! __("default.pages.for_parents.step_two_content") !!}
                                    </div>
                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}} 2</div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="step step__green">
                                    <div class="step__icon">
                                        <img src="/assets/img/step3.svg" alt="">
                                    </div>
                                    <div class="step__text">
                                        {!! __("default.pages.for_parents.step_three_content") !!}
                                    </div>
                                    <div class="step__title">{{__("default.pages.for_parents.step_title")}} 3</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="white-block">
                        <div class="plain-text plain-text__24">
                            {!! __("default.pages.for_parents.training_content") !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </article>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
