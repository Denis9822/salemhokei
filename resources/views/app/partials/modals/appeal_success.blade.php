{{--<div id="modal-form-success" style="display:none;" class="modal">--}}
    {{--<h3 class="title-double modal__title">--}}
    {{--<span>{{ __("default.Регистрация") }}</span>--}}
    {{--<span>{{ __("default.на спартакиаду") }}</span>--}}
    {{--</h3>--}}
    {{--<div class="modal__text text-center" style="width: 616px">--}}
        {{--@if(session("success_message"))--}}
            {{--<h2>{{ session("success_message") }}</h2>--}}
        {{--@else--}}
            {{--<h2>{{ __("default.Спасибо. Ваша заявка принята") }}</h2>--}}
        {{--@endif--}}
    {{--</div>--}}
{{--</div>--}}
{{--@if(session("form_success"))--}}
    {{--<script type="application/javascript">--}}
        {{--$.fancybox.open({--}}
            {{--src: '#modal-form-success',--}}
            {{--touch: false--}}
        {{--})--}}
    {{--</script>--}}
{{--@endif--}}


<div id="message" style="display:none;" class="modal">
    <div class="blue-bold text-center">
        <div>Спасибо за обращение!</div>
        <div>Номер вашего обращения 9379992</div>
    </div>
</div>
