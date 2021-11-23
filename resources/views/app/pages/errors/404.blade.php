@extends("app.layout.index")

@section("title","404 | ".__("default.errors.404"))

@section("content")
    <section>
        <div class="container">
            <h2 class="title-primary text-center">404</h2>
            <div class="subtitle text-center">{{ __("default.errors.404") }}</div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
