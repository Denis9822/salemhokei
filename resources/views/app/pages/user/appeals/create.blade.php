@extends("app.layout.index")

@section("title",__("default.pages.appeal_create.title")." | ".__("default.site_name"))

@section("content")
    <section>
        <div class="container">
            <h1 class="title-primary">{{ __("default.pages.appeal_create.title") }}</h1>
            @include("app.partials.verify_phone_required",["item" => $user])
            @if(session("success_message"))
                <div class="alert alert-success">{!! session("success_message") !!}</div>
            @endif
            @if(session("appeal_create_error"))
                @include("app.partials.error")
            @endif
            <form action="/{{ $lang }}/user/appeal" class="card" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="input-group">
                    <textarea name="description" placeholder="{{ __("default.forms.appeal_create.description") }}"
                              class="input-regular" required></textarea>
                </div>
                <div class="input-group">
                    <label class="file-input"> <span
                                class="file-selected">{{ __("default.forms.appeal_create.attachments") }}</span>
                        <span class="file-input__clear icon-close"></span><span class="icon-upload"></span>
                        <input type="file" style="display:none;" class="fileUpload" name="files[]" multiple>
                    </label>
                </div>
                <div class="card__grey-text">
                    {{ __("default.forms.appeal_create.hint") }}
                </div>
                <div class="input-group">
                    <label class="checkbox">
                        <input type="checkbox" name="agree" id="agree">
                        <span>{{ __("default.forms.appeal_create.agreement") }}</span>
                    </label>
                </div>
                <button class="btn" disabled>{{ __("default.pages.appeal_create.submit") }}</button>
            </form>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
