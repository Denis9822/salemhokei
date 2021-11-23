@if(!$item->phone_is_verified)
    <div class="alert alert-warning">
        {{ __("default.notifications.phone_verify_required") }}
        <div class="text-center">
            <a href="/{{ $lang }}/user/verifyPhone" class="btn">
                {{ __("default.forms.verify_phone.submit") }}
            </a>
        </div>
    </div>
@endif
