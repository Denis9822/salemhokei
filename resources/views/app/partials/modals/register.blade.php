<div id="registration" style="display:none;" class="modal">
    <h3 class="title-primary modal__title text-center">{{ __("default.forms.register.title") }}</h3>
    @if(session("register_error"))
        @include("app.partials.error")
    @endif

    <div class="input-group modal-error"></div>

    <form action="/{{ $lang }}/auth/register" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="role" value="simple">
        <div class="input-group">
            <input type="text" name="full_name" class="input-regular" placeholder="{{ __("default.forms.full_name") }}"
                   required
                   value="{{ old("full_name") }}">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.full_name")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="text" name="iin" class="input-regular" placeholder="{{ __("default.forms.iin") }}" required
                   value="{{ old("iin") }}"
                   maxlength="12" minlength="12" data-validate="iin">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.iin")]) }}</li>
                    <li class="length">{{ __("validation.size.string",["attribute" => __("default.forms.iin"),"size" => 12]) }}</li>
                </ul>
            </div>
        </div>
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
            <button type="submit" class="btn">{{ __("default.forms.register.submit") }}</button>
            <div class="hint-text">
                <div>{{ __("default.forms.register.option") }}</div>
                <a href="#authorization" data-fancybox
                   title="{{ __("default.forms.auth.title") }}">{{ __("default.forms.auth.title") }}</a>
            </div>
        </div>
    </form>
    <form action="/{{ $lang }}/auth/register" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="role" value="provider">
        <div class="input-group">
            <input type="text" name="full_name" class="input-regular"
                   placeholder="{{ __("default.forms.full_name_provider") }}"
                   required
                   value="{{ old("full_name") }}">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.full_name_provider")]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="text" name="bin" class="input-regular" placeholder="{{ __("default.forms.bin") }}" required
                   value="{{ old("bin") }}"
                   maxlength="12" minlength="12" data-validate="iin">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.bin")]) }}</li>
                    <li class="length">{{ __("validation.size.string",["attribute" => __("default.forms.bin"),"size" => 12]) }}</li>
                </ul>
            </div>
        </div>
        <div class="input-group">
            <input type="email" name="email" class="input-regular"
                   placeholder="{{ __("default.forms.email_provider") }}"
                   required
                   value="{{ old("email") }}" data-validate="email">
            <div class="alert alert-danger">
                <ul>
                    <li class="required">{{ __("validation.required",["attribute" => __("default.forms.email_provider")]) }}</li>
                    <li class="correct">{{ __("validation.email",["attribute" => __("default.forms.email_provider")]) }}</li>
                </ul>
            </div>
        </div>
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
            <button type="submit" class="btn">{{ __("default.forms.register.submit") }}</button>
            <div class="hint-text">
                <div>{{ __("default.forms.register.option") }}</div>
                <a href="#authorization" data-fancybox
                   title="{{ __("default.forms.auth.title") }}">{{ __("default.forms.auth.title") }}</a>
            </div>
        </div>
    </form>
</div>

@if(session("register_error"))
    <script>
        $.fancybox.open({
            src: '#registration',
            touch: false
        })
    </script>
@endif

<script>
    $("form", "#registration").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            success: function (data) {
                if (data.success) {
                    $(".modal-error", "#registration").removeClass("error").html("");
                    $.fancybox.getInstance('close');
                    $.fancybox.open({
                        src: '#verifyEmail',
                        touch: false
                    })
                } else {
                    $(".modal-error", "#registration").addClass("error").html(data.message);
                }
            }
        });
    });
</script>
