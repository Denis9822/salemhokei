<h2 class="title-primary text-center">{{ __("default.pages.profile.subtitle") }}</h2>
@if(session("update_password_error"))
    @include("app.partials.error")
@endif
<form class="card" action="/{{ $lang }}/user/updatePassword" method="post">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="password" name="password" class="input-regular"
               placeholder="{{ __("default.forms.password") }}" required
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
        <button type="submit" class="btn">{{ __("default.labels.save") }}</button>
    </div>
</form>
