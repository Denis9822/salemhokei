@extends("app.layout.index")

@section("title","500 | ".__("default.errors.500"))

@section("content")
    <section>
        <div class="container">
            <h2 class="title-primary text-center">500</h2>
            <div class="subtitle text-center">{{ __("default.errors.500") }}</div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
