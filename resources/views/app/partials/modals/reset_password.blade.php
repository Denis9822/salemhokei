<div id="forgot" style="display:none;" class="modal">
    <h3 class="title-primary modal__title text-center">{{ __("default.forms.reset_password.title") }}</h3>
    @if(session("reset_password_error"))
        @include("app.partials.error")
    @endif

    <div class="input-group modal-error"></div>

    <form action="/{{ $lang }}/auth/resetPassword" method="post">
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
        <div class="text-center">
            <button type="submit" class="btn">{{ __("default.forms.reset_password.submit") }}</button>
            <div class="hint-text">
                <a href="#authorization" data-fancybox
                   title="{{ __("default.forms.auth.title") }}">{{ __("default.forms.auth.title") }}</a>
            </div>
        </div>
    </form>
</div>

@if(session("reset_password_error") || isset($_GET["reset_password"]))
    <script>
        $.fancybox.open({
            src: '#forgot',
            touch: false
        })
    </script>
@endif

<script>
    $("form", "#forgot").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: form.serialize(),
            success: function (data) {
                if (data.success) {
                    $(".modal-error", "#forgot").removeClass("error").html("");
                    $.fancybox.getInstance('close');
                    $.fancybox.open({
                        src: '#renewPassword',
                        touch: false
                    })
                } else {
                    $(".modal-error", "#forgot").addClass("error").html(data.message);
                }
            }
        });
    });
</script>
