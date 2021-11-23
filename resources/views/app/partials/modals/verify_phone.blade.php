<div id="verifyPhone" style="display:none;" class="modal">
    <div class="input-group__title text-center">
        {{ __("default.forms.verify_phone.hint") }}
    </div>
    @if(session("phone_verify_error"))
        @include("app.partials.error")
    @endif
    <form action="/{{ $lang }}/auth/verifyPhone" method="post">
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

@if(session("phone_verify_error"))
    <script>
        $.fancybox.open({
            src: '#verifyPhone',
            touch: false
        })
    </script>
@endif
