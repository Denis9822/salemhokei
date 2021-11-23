<!DOCTYPE html>
<html lang="{{ $lang }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title",__("default.site_name"))</title>
    @include("app.layout.components.head")
    @yield("head")
    @yield("styles")
</head>

<body>
<input id="lang" type="hidden" value="{{ $lang }}">
<div class="main-wrapper">
    @include("app.layout.components.header")
    <main class="main">
        @yield("content")
    </main>
    @include("app.layout.components.footer")
</div>
<div class="scroll-up icon-chevron-up compensate-for-scrollbar"></div>
@include("app.layout.components.scripts")
@include("app.layout.components.modals")
@yield("scripts")
</body>

</html>
