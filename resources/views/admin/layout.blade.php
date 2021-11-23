<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.partials.head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('head')
        <title>@yield('title')</title>
    </head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.partials.sidebar')
            @include('admin.partials.topnav')
            <!-- page content -->
            @yield('content')
            <!-- /page content -->
            @include('admin.partials.footer')
        </div>
    </div>
{{--    @include("app.layout.components.scripts")--}}

    @include('admin.partials.scripts')
    @yield('scripts')
</body>
</html>
