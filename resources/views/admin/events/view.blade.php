@extends("admin.layout")

@section("head")
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

@section("title")
    Мероприятие: {{ $item->name_ru }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/events/">Все мероприятия</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/events/" method="get">
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
                @if(session("status"))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session("status") }}</strong>
                        </div>
                    </div>
                @endif
                <form action="/admin/event/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Мероприятие</h2>
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
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_ru_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has("name_ru") ? " has-error" : "" }}">
                                                <label for="name_ru">Название<span class="required">*</span></label>
                                                <input type="text" name="name_ru" id="name_ru" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_ru }}">
                                                @if ($errors->has("name_ru"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("name_ru") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("description_ru") ? " has-error" : "" }}">
                                                <label for="description_ru">Описание</label>
                                                <textarea name="description_ru" id="description_ru" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_ru }}</textarea>
                                                @if ($errors->has("description_ru"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("description_ru") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("name_ru") ? " has-error" : "" }}">
                                                <label for="city_ru">Город<span class="required">*</span></label>
                                                <input type="text" name="city_ru" id="city_ru" class="form-control"
                                                       placeholder="Введите название города"
                                                       value="{{ $item->city_ru }}">
                                                @if ($errors->has("city_ru"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("city_ru") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has("name_en") ? " has-error" : "" }}">
                                                <label for="name_en">Название<span class="required">*</span></label>
                                                <input type="text" name="name_en" id="name_en" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_en }}">
                                                @if ($errors->has("name_en"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("name_en") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("description_en") ? " has-error" : "" }}">
                                                <label for="description_en">Описание</label>
                                                <textarea name="description_en" id="description_en" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_en }}</textarea>
                                                @if ($errors->has("description_en"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("description_en") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("name_en") ? " has-error" : "" }}">
                                                <label for="city_en">Город<span class="required">*</span></label>
                                                <input type="text" name="city_en" id="city_en" class="form-control"
                                                       placeholder="Введите название города"
                                                       value="{{ $item->city_en }}">
                                                @if ($errors->has("city_en"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("city_en") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_kk_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has("name_kk") ? " has-error" : "" }}">
                                                <label for="name_kk">Название<span class="required">*</span></label>
                                                <input type="text" name="name_kk" id="name_kk" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_kk }}">
                                                @if ($errors->has("name_kk"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("name_kk") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("description_kk") ? " has-error" : "" }}">
                                                <label for="description_kk">Описание</label>
                                                <textarea name="description_kk" id="description_kk" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_kk }}</textarea>
                                                @if ($errors->has("description_kk"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("description_kk") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group {{ $errors->has("city_kk") ? " has-error" : "" }}">
                                                <label for="city_kk">Город<span class="required">*</span></label>
                                                <input type="text" name="city_kk" id="city_kk" class="form-control"
                                                       placeholder="Введите название города"
                                                       value="{{ $item->city_kk }}">
                                                @if ($errors->has("city_kk"))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first("city_kk") }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Настройки</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li style="float: right!important;">
                                                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <input type="hidden" name="url" value="{{ $item->url }}">
                                        <div class="form-group">
                                            <label for="date">Дата проведения мероприятия<span class="required">*</span></label>
                                            <fieldset>
                                                <div class="control-group">
                                                    <div class="controls">
                                                        <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i
                                                                class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                            <input type="text" name="date" id="date"
                                                                   class="form-control"
                                                                   value="@if(empty($item->date)){{ date("Y-m-d H:i") }}@else{{ date("Y-m-d H:i", strtotime($item->date)) }}@endif"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>
                                                <input name="is_published" value="0" type="hidden">
                                                <input name="is_published" value="1" type="checkbox" class="js-switch"
                                                       @if($item->is_published == 1) checked="checked" @endif>
                                                Опубликовать
                                            </label>
                                        </div>
                                        @if(!empty($item->id))
                                            @can("event.edit")
                                        <input type="submit" class="btn btn-success" value="Сохранить">
                                            @endcan
                                        @else
                                            <input type="submit" class="btn btn-success" value="Сохранить">
                                        @endif
                                    </div>
                                </div>
                            </div>
                </form>
                @can("event.delete")
                    @if(!empty($item->id))
                        <form action="/admin/event/{{ $item->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field("DELETE") }}
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
                @endcan
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script src="/assets/admin/vendors/tinymce/tinymce.min.js?apiKey=hn939jagzy31qbhyi2bwcnw3dn5l44sft7wylapoxgu10nuk"></script>
    <script type="text/javascript">
        function init_editor(id, language) {
            tinymce.init({
                selector: id,
                language: language,
                branding: false,
                images_upload_url: "/ajax_upload_image?_token={{ csrf_token() }}",
                files_upload_url: "/ajax_upload_file?_token={{ csrf_token() }}",
                automatic_uploads: false,
                min_height: 200,
                max_height: 600,
                relative_urls: false,
                remove_script_host: false,
                browser_spellcheck: true,
                convert_urls: true,
                plugins: "hr lists link image imagetools textcolor fileupload code",
                menubar: "",
                toolbar: "newdocument undo redo | bold italic underline strikethrough | " +
                    "alignleft aligncenter alignright alignjustify alignnone | " +
                    "formatselect | fontsizeselect | " +
                    "cut copy paste | outdent indent | blockquote | removeformat | hr | table | forecolor backcolor | code fullscreen" +
                    "bullist numlist | link unlink | image styleselect rotateleft rotateright flipv fliph editimage imageoptions | fileupload",
                link_context_toolbar: true,
                file_browser_callback_types: "file image media",
                style_formats: [
                    {
                        title: "Изображение слева",
                        selector: "img",
                        styles: {
                            "float": "left",
                            "margin": "0 10px 0 10px"
                        }
                    },
                    {
                        title: "Изображение справа",
                        selector: "img",
                        styles: {
                            "float": "right",
                            "margin": "0 0 10px 10px"
                        }
                    }
                ]
            });
        }
    </script>

    <script src="/assets/admin/vendors/moment/min/moment.min.js"></script>

    <script src="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

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
            init_editor("#annotation_ru", "ru");
            init_editor("#annotation_en", "en");
            init_editor("#annotation_kk", "kk");
            init_editor("#description_ru", "ru");
            init_editor("#description_en", "en");
            init_editor("#description_kk", "kk");

            $("select").select2();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#date").daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                use24hours: true,
                locale: {
                    format: "YYYY-MM-DD HH:mm",
                    separator: " - ",
                    applyLabel: "Подтвердить",
                    cancelLabel: "Отмена",
                    daysOfWeek: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                    monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
                    firstDay: 1
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            initial_plupload("avatar");
        })
    </script>
    <script type="text/javascript">
        function copyToClipboard(id) {
// var copyText = document.getElementById(id);
// copyText.select();
// document.execCommand("copy");
        }
    </script>
@endsection
