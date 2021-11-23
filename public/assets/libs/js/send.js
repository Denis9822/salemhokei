function validate(form) {
    var required = $('*[required]', form),
        message = $('.success-message', form.parent()),
        preloader = $('.preloader', form.parent());
    required.each(function () {
        if ($(this).val() == '') {
            $(this).addClass('red').removeClass('green');
        }
        else {
            $(this).addClass('green').removeClass('red');
        }
    });

    if ($('*[required].red', form).length == 0) {
        preloader.fadeIn(function () {
            $.ajax({
                method: "POST",
                url: "/send",
                data: form.serialize(),
                success: function (html) {
                    setTimeout(function () {
                        preloader.fadeOut(function () {
                            $.fancybox.getInstance('close');
                            setTimeout(function () {
                                $.fancybox.open({
                                    src: '#messageSuccess',
                                    touch: false
                                })
                            },500);
                        });
                    }, 1000);
                },
                error: function () {
                    setTimeout(function () {
                        preloader.fadeOut(function () {
                            $.fancybox.getInstance('close');
                            setTimeout(function () {
                                $.fancybox.open({
                                    src: '#messageError',
                                    touch: false
                                })
                            },500);
                        });
                    }, 1000);
                }
            });
        });
    }
}

$(document).ready(function () {
    $('form *[required]').on('change', function () {
        if ($(this).val() == '') {
            $(this).addClass('red').removeClass('green');
        }
        else {
            $(this).addClass('green').removeClass('red');
        }
    });

    $('form .btn').click(function () {
        validate($(this).closest('form'));
    });
});
