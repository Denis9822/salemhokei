@extends("admin.layout")

@section("head")
    <link rel="stylesheet" href="/assets/libs/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/css/main.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">
    <style>
        .daterangepicker.single.ltr .ranges, .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>
@endsection

@section("title")
    Статья: {{ $item->name_ru }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/articles/">Все статьи</a></li>
                        <li class="active">{{ $item->name_ru }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/articles/" method="get">
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
                <form action="/admin/article/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Статья</h2>
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
                                            <div class="form-group">
                                                <label for="annotation_ru">Аннотация</label>
                                                <textarea name="annotation_ru" id="annotation_ru" cols="30" rows="3"
                                                          class="form-control">{{ $item->annotation_ru }}</textarea>
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
                                            <div class="form-group">
                                                <label for="annotation_en">Аннотация</label>
                                                <textarea name="annotation_en" id="annotation_en" cols="30" rows="3"
                                                          class="form-control">{{ $item->annotation_en }}</textarea>
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
                                            <div class="form-group">
                                                <label for="annotation_kk">Аннотация</label>
                                                <textarea name="annotation_kk" id="annotation_kk" cols="30" rows="3"
                                                          class="form-control">{{ $item->annotation_kk }}</textarea>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Рубрикатор</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has("url") ? " has-error" : "" }}"
                                     style="display: none;">
                                    <label for="url">Страница новости</label>
                                    <input type="text" name="url" id="url" class="form-control"
                                           placeholder="Введите адрес страницы" value="{{ $item->url }}">
                                    @if ($errors->has("url"))
                                        <span class="help-block">
                                                        <strong>{{ $errors->first("url") }}</strong>
                                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="federation_id">Федерация<span class="required">*</span></label>
                                    <select name="federation_id" id="federation_id" class="form-control">
                                        @foreach($federations as $federation)
                                            <option @if($item->federation_id == $federation->id) selected
                                                    @endif value="{{ $federation->id }}">{{ $federation->name_ru." / ".$federation->sport_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Категория<span class="required">*</span></label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($item->categories() as $key => $value)
                                            <option @if($item->category_id == $key) selected
                                                    @endif value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rubric_id">Рубрика<span class="required">*</span></label>
                                    <select name="rubric_id" id="rubric_id" class="form-control">
                                        <option selected value="">-</option>
                                        @foreach($rubrics as $rubric)
                                            <option @if($item->rubric_id == $rubric->id) selected
                                                    @endif value="{{ $rubric->id }}">{{ $rubric->name_ru }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="game_id">Игра<span class="required">*</span></label>
                                    <select name="game_id" id="game_id" class="form-control">
                                        <option @if(empty($item->game_id)) selected @endif value="">-</option>
                                        @foreach($item->games() as $game)
                                            <option @if($item->game_id == $game->id) selected
                                                    @endif value="{{ $game->id }}">{{ $game->name }}</option>
                                        @endforeach
                                    </select>
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
                                    <label for="tags">Теги<span class="required">*</span></label>
                                    @php($itemTags = $item->tags ? $item->tags->pluck("id")->toArray() : [])
                                    <select name="tags[]" id="tags" class="form-control electro" multiple>
                                        @foreach($tags as $tag)
                                            <option @if(in_array($tag->id, $itemTags)) selected @endif value="{{ $tag->id }}">{{ $tag->name_ru." | ".$tag->name_kk." | ".$tag->name_en }}</option>
                                        @endforeach
                                    </select>
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
                                    <label for="sort">Порядковый номер<span class="required">*</span></label>
                                    <input type="number" name="sort" id="sort" class="form-control"
                                           placeholder="Введите порядковый номер"
                                           value="{{ $item->sort ? $item->sort : 1 }}">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>
                                        <input name="published" value="0" type="hidden">
                                        <input name="published" value="1" type="checkbox" class="js-switch"
                                               @if($item->published == 1) checked="checked" @endif> Опубликовать
                                    </label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>
                                        <input name="primary" value="0" type="hidden">
                                        <input name="primary" value="1" type="checkbox" class="js-switch"
                                               @if($item->primary == 1) checked="checked" @endif> Главная новость
                                    </label>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>
                                        <input name="hot" value="0" type="hidden">
                                        <input name="hot" value="1" type="checkbox" class="js-switch"
                                               @if($item->hot == 1) checked="checked" @endif> Важно
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="submit" class="btn btn-success" value="Сохранить">
                    </div>
                </form>
                @if(!empty($item->id))
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Ссылка для Telegram</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li style="float: right!important;">
                                            <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content" style="display: none;">
                                    <div class="form-group">
                                        <label for="lv_ru">RU версия</label>
                                        <input type="hidden" id="lv_link_ru" value="https://t.me/iv?url={{ env("APP_URL")."/ru/article/".$item->alt }}&rhash=a7263d17afe76e">
                                        <input onclick="copyToClipboard('lv_link_ru')" type="text" name="lv_ru" id="lv_ru" class="form-control" value="https://t.me/iv?url={{ env("APP_URL")."/ru/article/".$item->alt }}&rhash=a7263d17afe76e">
                                    </div>
                                    <div class="form-group">
                                        <label for="lv_kk">KK версия</label>
                                        <input type="hidden" id="lv_link_kk" value="https://t.me/iv?url={{ env("APP_URL")."/kk/article/".$item->alt }}&rhash=a7263d17afe76e">
                                        <input onclick="copyToClipboard('lv_link_kk')" type="text" name="lv_kk" id="lv_kk" class="form-control" value="https://t.me/iv?url={{ env("APP_URL")."/kk/article/".$item->alt }}&rhash=a7263d17afe76e">
                                    </div>
                                    <div class="form-group">
                                        <label for="lv_en">EN версия</label>
                                        <input type="hidden" id="lv_link_en" value="https://t.me/iv?url={{ env("APP_URL")."/en/article/".$item->alt }}&rhash=a7263d17afe76e">
                                        <input onclick="copyToClipboard('lv_link_en')" type="text" name="lv_en" id="lv_en" class="form-control" value="https://t.me/iv?url={{ env("APP_URL")."/en/article/".$item->alt }}&rhash=a7263d17afe76e">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Уведомление пользователей</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                                <a href="/admin/article/{{$item->id}}/notify?lang=ru" class="btn btn-success">RU
                                    версия</a>
                                <a href="/admin/article/{{$item->id}}/notify?lang=en" class="btn btn-success">EN
                                    версия</a>
                                <a href="/admin/article/{{$item->id}}/notify?lang=kk" class="btn btn-success">KK
                                    версия</a>
                            </div>
                        </div>
                    </div>
                    <form action="/admin/article/{{ $item->id }}" method="POST">
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

    <script src="/assets/libs/plupload-2.3.6/js/plupload.full.min.js"></script>
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
