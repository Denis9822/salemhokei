@extends('admin.layout')

@section('head')
    <!-- bootstrap-daterangepicker -->
    <link href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <style>
        .daterangepicker.single.ltr .ranges, .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>
    <!-- bootstrap-daterangepicker -->
    <script src="/assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#published_at').daterangepicker({
                singleDatePicker: true,
                locale: {
                    format: 'YYYY-MM-DD',
                    separator: ' - ',
                    applyLabel: 'Подтвердить',
                    cancelLabel: 'Отмена',
                    daysOfWeek: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    firstDay: 1
                }
            });
        });
    </script>
@endsection

@section('title')
    Видео: {{ $item->name_ru }}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/videos/">Все видео</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/videos/" method="get">
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
                @if(session('status'))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                @endif
                <form action="/admin/video/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Видео</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_ru_content" id="home-tab"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true">Русский язык</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_en_content" role="tab"
                                                                            id="profile-tab" data-toggle="tab"
                                                                            aria-expanded="false">Английский язык</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_kk_content" role="tab"
                                                                            id="profile-tab2" data-toggle="tab"
                                                                            aria-expanded="false">Казахский язык</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        @php($langs = [0=>'ru',1=>'kk',2=>'en'])
                                        @foreach($langs as $key => $lang)
                                            <div role="tabpanel" class="tab-pane fade @if($key == 0) active in @endif"
                                                 id="tab_{{$lang}}_content"
                                                 aria-labelledby="home-tab">
                                                <div class="form-group {{ $errors->has('name_'.$lang) ? ' has-error' : '' }}">
                                                    <label for="name_{{ $lang }}">Название<span
                                                                class="required"></span></label>
                                                    <input type="text" name="name_{{ $lang }}" id="name_{{ $lang }}"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute('name_'.$lang) }}">
                                                </div>
                                                <div class="form-group {{ $errors->has('link_'.$lang) ? ' has-error' : '' }}">
                                                    <label for="link_{{ $lang }}">URL видео<span
                                                                class="required"></span></label>
                                                    <input type="text" name="link_{{ $lang }}" id="link_{{ $lang }}"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute('link_'.$lang) }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Настройки</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="published_at">Дата публикации<span class="required">*</span></label>
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i
                                                                class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="text" name="published_at" id="published_at"
                                                           class="form-control"
                                                           value="@if(empty($item->published_at)){{ date("Y-m-d H:i") }}@else{{ date("Y-m-d H:i", strtotime($item->published_at)) }}@endif"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="is_published" value="0" type="hidden">
                                        <input name="is_published" value="1" type="checkbox" class="js-switch"
                                               @if($item->is_published == 1) checked="checked" @endif> Опубликовать
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-success" value="Сохранить">
                            </div>
                        </div>
                    </div>

                </form>
                @if(!empty($item->id))
                    @can("video.delete")
                        <form action="/admin/video/{{ $item->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Удаление</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" style="width: 100%">При удалении, все данные будут удалены</span>
                                            <span class="input-group-btn">
                                                <button class="btn btn-danger">Удалить</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endcan
                @endif
            </div>
        </div>
    </div>

@endsection
