@extends('admin.layout')

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>

    <style>
        .daterangepicker.single.ltr .ranges, .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>
@endsection

@section('title')
    Файл: {{ $item->name_ru }}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/docs/">Все файлы</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/docs/" method="get">
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
                <form action="/admin/doc/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Русская версия</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has('name_ru') ? ' has-error' : '' }}">
                                    <label for="name_ru">Название рус яз<span class="required">*</span></label>
                                    <input type="text" name="name_ru" id="name_ru" class="form-control"
                                           placeholder="Введите название" value="{{ $item->name_ru }}">
                                    @if ($errors->has('name_ru'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('name_ru') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                                <div class="form-group project_avatar t-table">
                                    <input type="hidden" name="avatar_ru" value="{{ $item->avatar_ru }}" id="avatar_ru"
                                           data-progressbar-id="avatar_ru-progressbar"
                                           data-drop-element-id="pick_avatar_ru">
                                    <div class="t-td" style="width: 150px; padding: 10px;">
                                        <a class="fancybox"
                                           href="{{ ($item->avatar_ru) ? $item->avatar_ru : '/assets/admin/img/user_photo.png' }}"
                                           target="_blank">
                                            <img src="{{ ($item->avatar_ru) ? $item->avatar_ru : '/assets/admin/img/user_photo.png' }}">
                                        </a>
                                    </div>
                                    <div id="pick_avatar_ru" class="t-td pick-image">
                                        <div class="drop-zone">
                                            <strong>Выберите изображение</strong><br>
                                            JPEG или PNG • 10 MB
                                        </div>
                                        <div id="avatar_ru-progressbar" class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0% Готово</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-group {{ $errors->has('file_ru') ? ' has-error' : '' }}">
                                    <label for="file_ru">Файл на рус яз</label>
                                    <div>
                                        <p><a href="{{ $item->file_ru }}">{{ $item->name_ru }}</a></p>
                                        <label class="btn btn-default btn-file" style="margin: 10px 0 0;">
                                            <span>Загрузить файл</span>
                                            <input type="file" id="file_ru" name="file_ru" style="display: none;">
                                        </label>
                                    </div>
                                    @if ($errors->has('file_ru'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('file_ru') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Казахская версия</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has('name_kk') ? ' has-error' : '' }}">
                                    <label for="name_kk">Название каз яз<span class="required">*</span></label>
                                    <input type="text" name="name_kk" id="name_kk" class="form-control"
                                           placeholder="Введите название" value="{{ $item->name_kk }}">
                                    @if ($errors->has('name_kk'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('name_kk') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                                <div class="form-group project_avatar t-table">
                                    <input type="hidden" name="avatar_kk" value="{{ $item->avatar_kk }}" id="avatar_kk"
                                           data-progressbar-id="avatar_kk-progressbar"
                                           data-drop-element-id="pick_avatar_kk">
                                    <div class="t-td" style="width: 150px; padding: 10px;">
                                        <a class="fancybox"
                                           href="{{ ($item->avatar_kk) ? $item->avatar_kk : '/assets/admin/img/user_photo.png' }}"
                                           target="_blank">
                                            <img src="{{ ($item->avatar_kk) ? $item->avatar_kk : '/assets/admin/img/user_photo.png' }}">
                                        </a>
                                    </div>
                                    <div id="pick_avatar_kk" class="t-td pick-image">
                                        <div class="drop-zone">
                                            <strong>Выберите изображение</strong><br>
                                            JPEG или PNG • 10 MB
                                        </div>
                                        <div id="avatar_kk-progressbar" class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0% Готово</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-group {{ $errors->has('file_kk') ? ' has-error' : '' }}">
                                    <label for="file_kk">Файл на каз яз</label>
                                    <div>
                                        <p><a href="{{ $item->file_kk }}">{{ $item->name_kk }}</a></p>
                                        <label class="btn btn-default btn-file" style="margin: 10px 0 0;">
                                            <span>Загрузить файл</span>
                                            <input type="file" id="file_kk" name="file_kk" style="display: none;">
                                        </label>
                                    </div>
                                    @if ($errors->has('file_kk'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('file_kk') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Английская версия</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has('name_en') ? ' has-error' : '' }}">
                                    <label for="name_en">Название англ яз<span class="required">*</span></label>
                                    <input type="text" name="name_en" id="name_en" class="form-control"
                                           placeholder="Введите название" value="{{ $item->name_en }}">
                                    @if ($errors->has('name_en'))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first('name_en') }}</strong>
                                                    </span>
                                    @endif
                                </div>
                                <div class="form-group project_avatar t-table">
                                    <input type="hidden" name="avatar_en" value="{{ $item->avatar_en }}" id="avatar_en"
                                           data-progressbar-id="avatar_en-progressbar"
                                           data-drop-element-id="pick_avatar_en">
                                    <div class="t-td" style="width: 150px; padding: 10px;">
                                        <a class="fancybox"
                                           href="{{ ($item->avatar_en) ? $item->avatar_en : '/assets/admin/img/user_photo.png' }}"
                                           target="_blank">
                                            <img src="{{ ($item->avatar_en) ? $item->avatar_en : '/assets/admin/img/user_photo.png' }}">
                                        </a>
                                    </div>
                                    <div id="pick_avatar_en" class="t-td pick-image">
                                        <div class="drop-zone">
                                            <strong>Выберите изображение</strong><br>
                                            JPEG или PNG • 10 MB
                                        </div>
                                        <div id="avatar_en-progressbar" class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0% Готово</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="form-group {{ $errors->has('file_en') ? ' has-error' : '' }}">
                                    <label for="file_en">Файл на англ яз</label>
                                    <div>
                                        <p><a href="{{ $item->file_en }}">{{ $item->name_en }}</a></p>
                                        <label class="btn btn-default btn-file" style="margin: 10px 0 0;">
                                            <span>Загрузить файл</span>
                                            <input type="file" id="file_en" name="file_en" style="display: none;">
                                        </label>
                                    </div>
                                    @if ($errors->has('file_en'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('file_en') }}</strong>
                                            </span>
                                    @endif
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
                                    <label>
                                        <input name="is_published" value="0" type="hidden">
                                        <input name="is_published" value="1" type="checkbox" class="js-switch"
                                               @if($item->is_published == 1) checked="checked" @endif> Опубликовать
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-lg" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </form>

                @if(!empty($item->id))
                    <form action="/admin/doc/{{ $item->id }}" method="POST">
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
                @endif
            </div>
        </div>
    </div>
@endsection

@section("scripts")
    <script src="/assets/admin/vendors/plupload-2.3.6/js/plupload.full.min.js"></script>
    <script type="text/javascript">
        function initial_plupload(object_id) {
            var object = $("#" + object_id);

            var image = new plupload.Uploader({
                runtimes: "html5,flash,silverlight,gears",
                browse_button: object.attr("data-drop-element-id"),
                drop_element: object.attr("data-drop-element-id"),
                max_file_size: "10mb",
                url: "/ajax_upload_image?_token={{ csrf_token() }}",
                flash_swf_url: "/assets/libs/plupload-2.3.6/js/Moxie.swf",
                silverlight_xap_url: "/assets/libs/plupload-2.3.6/js/Moxie.xap",
                filters: [
                    {title: "Image files", extensions: "jpg,png,jpe,jpeg"},
                ],
                resize: {width: 2000, height: 2000, quality: 90, crop: false},
                unique_names: true,
                multiple_queues: false,
                multi_selection: false,
            });

            var progressbar = $("#" + object.attr("data-progressbar-id"));

            $("#" + object.attr("data-drop-element-id"))[0].ondragover = function () {
                $(this).find(".drop-zone").addClass("over").children("strong").text("Бросьте изображение сюда");
            };
            $("#" + object.attr("data-drop-element-id"))[0].ondragleave = function () {
                $(this).find(".drop-zone").removeClass("over").children("strong").text("Выберите изображение");
            };

            image.bind("FilesAdded", function (up, files) {
                progressbar.find(".progress-bar").css({width: 0});
                progressbar.show();
                up.refresh(); // Reposition Flash/Silverlight
                $("#" + object.attr("data-drop-element-id") + " > .drop-zone").hide();
                setTimeout(function () {
                    up.start();
                }, 200);
            });

            image.bind("UploadProgress", function (up, file) {
                //$("#" + file.id).html(file.name + " - " + file.percent + "%");
                progressbar.find(".progress-bar").css({width: file.percent + "%"});
            });

            image.bind("Error", function (up, err) {
                progressbar.hide();
                $("#" + object.attr("data-drop-element-id"))[0].ondragleave();
                $("#" + object.attr("data-drop-element-id") + " > .drop-zone").show();
                up.refresh(); // Reposition Flash/Silverlight
            });

            image.bind("FileUploaded", function (up, file, response) {
                $("#" + file.id).remove();
                var obj = $.parseJSON(response.response.replace(/^.*?({.*}).*?$/gi, "$1"));
                console.log(obj);

                $("#" + object.attr("data-drop-element-id")).parent()
                    .find("img")
                    .attr("src", obj.location)
                    .parent()
                    .attr("href", obj.location);

                $("#" + object_id).val(obj.location);
            });

            image.bind("UploadComplete", function (up) {
                progressbar.hide();
                $("#" + object.attr("data-drop-element-id"))[0].ondragleave();
                $("#" + object.attr("data-drop-element-id") + " > .drop-zone").show();
                up.refresh();
            });

            image.init();
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            initial_plupload("avatar_ru");
            initial_plupload("avatar_kk");
            initial_plupload("avatar_en");
        })
    </script>
@endsection
