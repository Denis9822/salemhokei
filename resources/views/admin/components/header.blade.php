<header class="header">
    <div class="container">
        <div class="logo">
            <a href="/{{ $lang }}" title="Главная">
                <img class="logo_img" src="/assets/img/logo.svg" alt="">
                <img class="mobile_logo_img" src="/assets/img/salem-hokkey-logo.png" alt="">
            </a>
        </div>
        <div class="menu-btn-wrapper">
            <div class="menu-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="header-right">
            <div class="header-right__top">
                {{-- <a href="#" title="instagram:salem.hokei" class="btn"><i class="icon-instagram"></i>
          <span>salem.hokei</span></a>
        <a href="#" title="play air hockey" class="btn btn--red"><i class="icon-air-hockey"></i> <span>play air
            hockey</span></a>
        <a href="#request" data-fancybox="" title="{{ __('default.pages.header.contact_us') }}"
                class="btn btn--dark"><i class="icon-envelope"></i>
                <span>{{ __('default.pages.header.contact_us') }}</span></a> --}}

            </div>
            @if ($lang == 'kk')
            <nav class="menu menu--kk">@else<nav class="menu">
                    @endif


                    <div class="d-flex flex-column flex-lg-row justify-content-around">

                        {!! $MyNavBar->asUl( ['class' => 'first_level_list'], ['class' => 'second_level_list']) !!}

                        <div class="language" style="">
                            @if ($lang == 'ru')
                            <a href="/kk{{ $uri }}" title="KZ">KZ</a><span>|</span><a href="/ru{{ $uri }}" title="RU"
                                class="active">RU</a>
                            @else
                            <a href="/kk{{ $uri }}" title="KZ" class="active">KZ</a><span>|</span><a
                                href="/ru{{ $uri }}" title="RU">RU</a>
                            @endif
                        </div>

                    </div>

                </nav>
        </div>
    </div>
</header>
{{-- //YOU MUST HAVE JQUERY LOADED BEFORE menu scripts --}}
{{-- @push('scripts')
  {!! Menu::scripts() !!}
@endpush --}}
