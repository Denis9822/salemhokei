@extends("admin.layout")

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>


@endsection
@section('scripts')

@endsection


@section('title')
    Страница: {{ $item->name_ru }}
@endsection

@section('content')

@endsection

@section('scripts')

@endsection
