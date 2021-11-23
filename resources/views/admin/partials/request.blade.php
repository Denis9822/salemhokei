{{--<div id="request" class="form-modal" style="display:none">--}}
{{--    <h3 class="title-primary text-center">{{ __("default.pages.modals.write_us") }}</h3>--}}
{{--    <form class="form" method="post" action="/contact_mail">--}}
{{--        {{ csrf_field() }}--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" name="name" placeholder="{{ __("default.pages.modals.name") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="tel" name="phone" placeholder="{{ __("default.pages.modals.phone") }}" onfocus="$(this).inputmask('+7 999 999 99 99')"--}}
{{--                   class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="email" name="email" placeholder="{{ __("default.pages.modals.email") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <textarea name="message" placeholder="{{ __("default.pages.modals.message") }}" class="input-regular"></textarea>--}}
{{--        </div>--}}
{{--        <div class="text-center">--}}
{{--            <button type="submit" class="btn">{{ __("default.pages.modals.send") }}</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div id="testLesson" class="form-modal" style="display:none">--}}
{{--    <h3 class="title-primary text-center">{{ __("default.pages.modals.try_lesson_title") }}</h3>--}}
{{--    <form class="form" method="post" action="/record_to_school">--}}
{{--        {{ csrf_field() }}--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" name="name" placeholder="{{ __("default.pages.modals.name") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="tel" name="phone" placeholder="{{ __("default.pages.modals.phone") }}" onfocus="$(this).inputmask('+7 999 999 99 99')"--}}
{{--                   class="input-regular" required>--}}
{{--        </div>--}}
{{--        <div class="input-group">--}}
{{--            <input type="email" name="email" placeholder="{{ __("default.pages.modals.email") }}" class="input-regular" required>--}}
{{--        </div>--}}
{{--        @if(!empty($item->regions[0]))--}}
{{--            <div class="input-group">--}}
{{--                <input type="hidden" name="region" class="input-regular"--}}
{{--                       value="{!! $item->regions[0]->getAttribute('name_'.$lang) ?? $item->regions[0]->getAttribute('name_ru') !!}">--}}
{{--            </div>--}}
{{--        @endif--}}
{{--        <div class="text-center">--}}
{{--            <button type="submit" class="btn">{{ __("default.pages.modals.send_write") }}</button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}


<div id="equipment_sink" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.equipment.sink") }}</h4>
    <p>{{ __("default.pages.equipment.sink_content") }}</p>
</div>



<div id="equipment_kneecap" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.equipment.kneecap") }}</h4>
    {{__("default.pages.equipment.kneecap_video")}}

</div>


<div id="hockey_field" class="form-modal" style="display:none">
    <h4 class="title-primary text-center">{{ __("default.pages.main.hockey_field_title") }}</h4>
    {!! __("default.pages.main.hockey_field_content") !!}
</div>


<div id="equipment_player" class="form-modal" style="display:none">
    {{--<h4 class="title-primary text-center">{{ __("default.pages.equipment.player") }}</h4>--}}
    {!! __("default.pages.equipment.player_content") !!}
</div>


<div id="messageSuccess" class="form-modal" style="display:none">
    <h3 class="title-primary text-center">{{ __("default.pages.modals.success_message") }}</h3>

    {{--<div class="text-center">--}}
        {{--<a href="/" class="btn">На главную</a>--}}
    {{--</div>--}}
</div>
@if(session()->has('success'))
    <script>
        $.fancybox.open({
            src: "#messageSuccess",
            touch: false
        })
    </script>

@endif
