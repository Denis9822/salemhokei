<div id="verifyEmail" style="display:none;" class="modal">
    <div class="input-group__title text-center">
        {{ __("default.forms.verify_email.hint") }}
    </div>
    @if(session("email_verify_error"))
        @include("app.partials.error")
    @endif
    <form action="/{{ $lang }}/auth/verifyEmail" method="post">
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
            <button type="submit" class="btn">{{ __("default.forms.verify_email.submit") }}</button>
        </div>
    </form>
</div>

@if(session("email_verify_error"))
    <script>
        $.fancybox.open({
            src: '#verifyEmail',
            touch: false
        })
    </script>
@endif
