@extends("admin.layout")

@section('head')
<link rel="stylesheet" href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css" />
<link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css" />
<link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css" />
<link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

<link rel="stylesheet" href="/assets/admin/css/main.css" />

<style>
  .daterangepicker.single.ltr .ranges,
  .daterangepicker.single.ltr .calendar {
    float: none;
  }

</style>
@endsection
@section('scripts')

@endsection


@section('title')
Страница: {{ $item->name_ru }}
@endsection

@section('content')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <ol class="breadcrumb">
          <li><a href="/admin/pages/">Все страницы</a></li>
          <li class="active">{{ $item->name_ru }}</li>
        </ol>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <form action="/admin/pages/" method="get">
            <div class="input-group">
              <input type="text" name="term" class="form-control" placeholder="Поиск">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">Найти</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      @if (session('status'))
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-success" role="alert">
          <strong>{{ session('status') }}</strong>
        </div>
      </div>
      @endif

      <div class="card card-body col-md-12">
        не статическая страница.
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection
