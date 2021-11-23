@extends('admin.layout')

@section("head")
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/libs/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
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
    Альбом: {{ $item->name_ru }}
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/albums/">Все альбомы</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/albums/" method="get">
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
                <form action="/admin/album/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
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
                                <h2>SEO</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#tab_seo_ru_content"
                                                                                  id="home-tab"
                                                                                  role="tab" data-toggle="tab"
                                                                                  aria-expanded="true">Русский язык</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_seo_en_content" role="tab"
                                                                            id="profile-tab" data-toggle="tab"
                                                                            aria-expanded="false">Английский язык</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_seo_kk_content" role="tab"
                                                                            id="profile-tab2" data-toggle="tab"
                                                                            aria-expanded="false">Казахский язык</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        @php($langs = [0=>'ru',1=>'kk',2=>'en'])
                                        @foreach($langs as $key => $lang)
                                            <div role="tabpanel" class="tab-pane fade @if($key == 0) active in @endif"
                                                 id="tab_seo_{{ $lang }}_content"
                                                 aria-labelledby="home-tab">
                                                <input type="hidden" name="url" value="{{ $item->url }}">
                                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                                    <label for="meta_title_{!! $lang !!}">Meta title<span
                                                                class="required"></span></label>
                                                    <input type="text" name="meta_title_{!! $lang !!}"
                                                           id="meta_title_{!! $lang !!}"
                                                           class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute("meta_title_$lang") }}">

                                                </div>
                                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                                    <label for="meta_description_{!! $lang !!}">Meta description<span
                                                                class="required"></span></label>
                                                    <textarea name="meta_description_{!! $lang !!}"
                                                              id="meta_description_{!! $lang !!}"
                                                              cols="30" rows="3"
                                                              class="form-control">{{ $item->getAttribute("meta_description_$lang") }}</textarea>

                                                </div>
                                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                                    <label for="open_graph_title_{!! $lang !!}">Open Graph title<span
                                                                class="required"></span></label>
                                                    <input type="text" name="open_graph_title_{!! $lang !!}"
                                                           id="open_graph_title_{!! $lang !!}" class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute("open_graph_title_$lang") }}">
                                                </div>
                                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                                    <label for="open_graph_description_{!! $lang !!}">Open Graph
                                                        description<span class="required"></span></label>
                                                    <textarea name="open_graph_description_{!! $lang !!}"
                                                              id="open_graph_description_{!! $lang !!}" cols="30"
                                                              rows="3"
                                                              class="form-control">{{ $item->getAttribute("open_graph_description_$lang") }}</textarea>

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

                                <div class="form-group project_avatar t-table">
                                    <input type="hidden" name="image" value="{{ $item->avatar }}" id="avatar"
                                           data-drop-element-id="pick_image"
                                           data-progressbar-id="image-progressbar">
                                    <div class="t-td" style="width: 150px; padding: 10px;">
                                        <a class="fancybox"
                                           href="{{ ($item->avatar) ? $item->avatar : '/assets/admin/img/user_photo.png' }}"
                                           target="_blank">
                                            <img src="{{ ($item->avatar) ? $item->avatar : '/assets/admin/img/user_photo.png' }}">
                                        </a>
                                    </div>
                                    <div id="pick_image" class="t-td">
                                        <div class="drop-zone">
                                            <strong>Выберите изображение</strong><br>
                                            JPEG или PNG • 10 MB
                                        </div>
                                        <div id="image-progressbar" class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuenow="0"
                                                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                <span class="sr-only">0% Готово</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Добавить фотографии</div>
                            <div class="panel-body">
                                <form action="/admin/album/add_picture/{{ $item->id }}" method="POST"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <label class="btn btn-default btn-file">
                                        <span>Выбрать файл</span>
                                        <input type="file" id="pic" name="pic[]" style="display: none;"  multiple>
                                    </label>
                                    <button type="submit" class="btn btn-primary">Добавить</button>
                                    <p id="images_count"></p>
                                </form>
                            </div>
                        </div>
                    </div>



                    @if(count($pictures)>0)
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Дополнительные фотографии</div>
                                <div class="panel-body">
                                    <form action="/admin/album/delete_picture/{{ $item->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <div class="row">
                                            @foreach($pictures as $picture)
                                                <div class="col-md-3 gallery_image">
                                                    <label>
                                                        <input type="checkbox" name="pics[{{ $picture->id }}]"
                                                               value="{{ $picture->id }}">
                                                        <br>
                                                        <img src="{{ $picture->avatar }}" alt=""
                                                             style="height: 200px; width: 100%; object-fit: contain;">
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div style="margin: 10px 0 0">
                                            <button type="submit" class="btn btn-danger">Удалить выбранные фотографии
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif

                @if(!empty($item->id))
                    @can("album.delete")
                        <form action="/admin/album/{{ $item->id }}" method="POST">
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
        function initial_plupload(Object_id) {
            var Object = $("#" + Object_id);

            var image = new plupload.Uploader({
                runtimes: "html5,flash,silverlight,gears",
                browse_button: Object.attr("data-drop-element-id"),
                drop_element: Object.attr("data-drop-element-id"),
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

            var progressbar = $("#" + Object.attr("data-progressbar-id"));

            $("#" + Object.attr("data-drop-element-id"))[0].ondragover = function () {
                $(this).find(".drop-zone").addClass("over").children("strong").text("Бросьте изображение сюда");
            };
            $("#" + Object.attr("data-drop-element-id"))[0].ondragleave = function () {
                $(this).find(".drop-zone").removeClass("over").children("strong").text("Выберите изображение");
            };

            image.bind("FilesAdded", function (up, files) {
                progressbar.find(".progress-bar").css({width: 0});
                progressbar.show();
                up.refresh(); // Reposition Flash/Silverlight
                $("#" + Object.attr("data-drop-element-id") + " > .drop-zone").hide();
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
                $("#" + Object.attr("data-drop-element-id"))[0].ondragleave();
                $("#" + Object.attr("data-drop-element-id") + " > .drop-zone").show();
                up.refresh(); // Reposition Flash/Silverlight
            });

            image.bind("FileUploaded", function (up, file, response) {
                $("#" + file.id).remove();
                var obj = $.parseJSON(response.response.replace(/^.*?({.*}).*?$/gi, "$1"));
                console.log(obj);

                $("#" + Object.attr("data-drop-element-id")).parent()
                    .find("img")
                    .attr("src", obj.location)
                    .parent()
                    .attr("href", obj.location);

                $("#" + Object_id).val(obj.location);
            });

            image.bind("UploadComplete", function (up) {
                progressbar.hide();
                $("#" + Object.attr("data-drop-element-id"))[0].ondragleave();
                $("#" + Object.attr("data-drop-element-id") + " > .drop-zone").show();
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
            $("#published_at").daterangepicker({
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
        $("input[type='file']").on("change", function(){
            var numFiles = $(this).get(0).files.length;
            document.getElementById("images_count").innerHTML = "Выбрано файлов: "+numFiles;
        });
    </script>

@endsection