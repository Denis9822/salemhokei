@extends("app.layout.index")

@section("title",__("default.pages.profile.title")." | ".__("default.site_name"))

@section("content")
    <section>
        <div class="container container--sm">
            <h1 class="title-primary text-center">{{ __("default.pages.verify_phone.title") }}</h1>
            @if(session("success_message"))
                <div class="alert alert-success">{!! session("success_message") !!}</div>
            @endif
            @if(session("user_phone_verify_error"))
                @include("app.partials.error")
            @endif
            <form class="card" action="/{{ $lang }}/user/verifyPhone" method="post">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="code" class="input-regular" placeholder="{{ __("default.forms.code") }}" required value="{{ old("code") }}">
                    <div class="alert alert-danger">
                        <ul>
                            <li class="required">{{ __("validation.required",["attribute" => __("default.forms.code")]) }}</li>
                        </ul>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">{{ __("default.forms.verify_phone.submit") }}</button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
