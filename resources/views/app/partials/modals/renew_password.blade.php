<div id="renewPassword" style="display:none;" class="modal">
    <h3 class="title-primary modal__title text-center">{{ __("default.forms.renew_password.title") }}</h3>
    @if(session("renew_password_error"))
        @include("app.partials.error")
    @endif
    <form action="/{{ $lang }}/auth/renewPassword" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" name="code" class="input-regular" placeholder="{{ __("default.forms.code") }}" required value="{{ old("code") }}">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.code")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="password" name="password" class="input-regular" placeholder="{{ __("default.forms.password") }}" required
                   value="{{ old("password") }}" data-validate="password">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.password")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="password" name="password_confirmation"
                   class="input-regular" placeholder="{{ __("default.forms.password_confirmation") }}"
                   required data-validate="passwordConfirm"
                   value="{{ old("password_confirmation") }}">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.password_confirmation")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn">{{ __("default.forms.renew_password.submit") }}</button>
            <div class="hint-text">
                <a href="#authorization" data-fancybox title="{{ __("default.forms.auth.title") }}">{{ __("default.forms.auth.title") }}</a>
            </div>
        </div>
    </form>
</div>

@if(session("renew_password_error"))
    <script>
        $.fancybox.open({
            src: '#renewPassword',
            touch: false
        })
    </script>
@endif
