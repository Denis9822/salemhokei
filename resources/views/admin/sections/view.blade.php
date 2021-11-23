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
    @if($name == 'rink')
        Каток: {{ $item->name_ru }}
    @else
    Школа: {{ $item->name_ru }}
    @endif
@endsection

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        @if($name == 'rink')
                            <li><a href="/admin/sections/rink">Все катки</a></li>
                        @else
                        <li><a href="/admin/sections/">Все школы</a></li>
                        @endif
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/sections/" method="get">
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
                <form action="/admin/section/{{ $item->id ? $item->id : "add" }}" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>    @if($name == 'rink')
                                        Каток
                                    @else
                                        Школа
                                    @endif</h2>
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
                                        @php($languages = ["ru","kk","en"])
                                        @foreach($languages as $key => $language)
                                            <div role="tabpanel" class="tab-pane fade @if($key == 0) active in @endif"
                                                 id="tab_{{ $language }}_content"
                                                 aria-labelledby="home-tab">





                                                <div class="form-group {{ $errors->has("name_$language") ? " has-error" : "" }}">
                                                    <label for="{{ "name_$language" }}">Название<span
                                                                class="required">*</span></label>
                                                    <input type="text" name="{{ "name_$language" }}"
                                                           id="{{ "name_$language" }}" class="form-control"
                                                           placeholder="Введите название @if($name == 'rink') катка @else школы @endif"
                                                           value="{{ $item->getAttribute("name_$language") }}">
                                                    @if ($errors->has("name_$language"))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first("name_$language") }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has("annotation_$language") ? " has-error" : "" }}">
                                                    <label for="{{ "annotation_$language" }}">Описание</label>
                                                    <textarea name="{{ "annotation_$language" }}"
                                                              id="{{ "annotation_$language" }}" cols="30"
                                                              rows="3"
                                                              class="form-control">{{ $item->getAttribute("annotation_$language") }}</textarea>
                                                    @if ($errors->has("annotation_$language"))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first("annotation_$language") }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                <div class="form-group {{ $errors->has("description_$language") ? " has-error" : "" }}">
                                                    <label for="{{ "description_$language" }}">Содержание</label>
                                                    <textarea name="{{ "description_$language" }}"
                                                              id="{{ "description_$language" }}" cols="30"
                                                              rows="3"
                                                              class="form-control">{{ $item->getAttribute("description_$language") }}</textarea>
                                                    @if ($errors->has("description_$language"))
                                                        <span class="help-block">
                                                        <strong>{{ $errors->first("description_$language") }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                                {{--<div class="form-group {{ $errors->has("name_ru") ? " has-error" : "" }}">--}}
                                                    {{--<label for="city_{{$language}}">Город<span class="required">*</span></label>--}}
                                                    {{--<input type="text" name="city_{{$language}}" id="city_{{$language}}"--}}
                                                           {{--class="form-control"--}}
                                                           {{--placeholder="Введите название города"--}}
                                                           {{--value="{{ $item->getAttribute("city_$language") }}">--}}
                                                    {{--@if ($item->getAttribute("city_$language"))--}}
                                                        {{--<span class="help-block">--}}
                                                        {{--<strong>{{ $errors->first("city_$language") }}</strong>--}}
                                                    {{--</span>--}}
                                                    {{--@endif--}}
                                                {{--</div>--}}
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
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <input type="hidden" name="url" value="{{ $item->url }}">
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
                                    <label for="region_id">Регион<span class="required"></span></label>
                                    <select name="region_id" id="region_id" class="form-control">
                                        @foreach($regions as $region)
                                            @if(!empty($item->id))
                                                <option @if($item->regions[0]->pivot->region_id == $region->id) selected
                                                        @endif value="{{ $region->id }}">{{ $region->name_ru }}</option>
                                            @else
                                                <option value="{{ $region->id }}">{{ $region->name_ru }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Ответственный<span class="required"></span></label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        @foreach($responsible as $author)
                                            @if(!empty($item->id))
                                                <option @if($item->authors[0]->pivot->user_id == $author->id) selected
                                                        @endif value="{{ $author->id }}">{{ $author->name }}</option>
                                            @else
                                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            <hr>



                                <div class="form-group">
                                    <label>
                                        <input name="satrud" value="0" type="hidden">
                                        <input name="satrud" value="1" type="checkbox" class="js-switch"
                                               @if($item->satrud == 1) checked="checked" @endif> С нами сотрудничает
                                    </label>
                                </div>

    <div class="form-group email">
         <label for="email">E-mail</label>
            <input type="text" name="email"    id="email" class="form-control" placeholder="Введите email @if($name == 'rink') катка @else школы @endif"  value="@if($item->email != null) {{$item->email}} @endif">
    </div>


                                    <br>
                                <div class="form-group email">
                                    <label for="email">Google map code</label>
                                    <input type="text" name="google_map"  id="email" class="form-control" placeholder='<iframe width="100%" height="100%" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=dddd&q=Space+Needle,Seattle+WA"></iframe>'  value="@if($item->google_map != null) {{$item->google_map}} @endif">
                                </div>


                                <div class="form-group email">
                                    <label for="email">Yandex map code</label>
                                    <input type="text" name="yandex_map"  id="email" class="form-control" placeholder='<iframe src="https://api-maps.yandex.ru/frame/v1/-/CVh7YBYg?" width="100%" height="100%" frameborder="0"></iframe>'  value="@if($item->yandex_map != null) {{$item->yandex_map}} @endif">
                                </div>

                                <hr>
                                @if($name == 'rink') <input type="hidden" name="type" value="2"> @else <input type="hidden" name="type" value="1"> @endif

                                <div class="form-group">
                                    <label>
                                        <input name="is_published" value="0" type="hidden">
                                        <input name="is_published" value="1" type="checkbox" class="js-switch"
                                               @if($item->is_published == 1) checked="checked" @endif> Опубликовать
                                    </label>
                                </div>






                                @if(!empty($item->id))
                                    @can("section.edit")
                                        <input type="submit" class="btn btn-success" value="Сохранить">
                                    @endcan
                                @else
                                    <input type="submit" class="btn btn-success" value="Сохранить">
                                @endif
                            </div>

                        </div>
                    </div>

                </form>
                @if(!empty($item->id))
                    <form action="/admin/section/{{ $item->id }}" method="POST">
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
        function copyToClipboard(id) {
            // var copyText = document.getElementById(id);
            // copyText.select();
            // document.execCommand("copy");
        }
    </script>
@endsection
