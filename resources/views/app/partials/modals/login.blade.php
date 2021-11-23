<div id="authorization" style="display:none;" class="modal">
    <h3 class="title-primary modal__title text-center">{{ __("default.forms.auth.title") }}</h3>
    @if(session("login_error"))
        @include("app.partials.error")
    @endif
    <form action="/{{ $lang }}/auth/login" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="email" name="email" class="input-regular" placeholder="{{ __("default.forms.email") }}"
                   required
                   value="{{ old("email") }}" data-validate="email">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.email")]) }}</li>
                    <li class="correct">{{ __("validation.email",["attribute" => __("default.forms.email")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="text" name="password" class="input-regular" placeholder="{{ __("default.forms.password") }}"
                   required
                   value="{{ old("password") }}">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.password")]) }}</li>
                </ul>
            </div>
            <div class="text-right">
                <a href="#forgot" data-fancybox="" title="{{ __("default.forms.auth.option") }}"
                   class="grey-link">{{ __("default.forms.auth.option") }}</a>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn">{{ __("default.forms.auth.title") }}</button>
            <div class="hint-text">
                <a href="#registration" data-fancybox
                   title="{{ __("default.forms.register.title") }}">{{ __("default.forms.register.title") }}</a>
            </div>
        </div>
    </form>
</div>

@if(session("login_error") || session("need_auth"))
    <script>
        $.fancybox.open({
            src: '#authorization',
            touch: false
        })
    </script>
@endif
