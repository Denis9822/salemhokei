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
    Обращение: {{ $item->id }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/appeals/">Все статьи</a></li>
                        <li class="active">Обращение: {{ $item->id }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/appeals/" method="get">
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
                <form action="/admin/appeal/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Обращение</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea name="description" id="description" cols="30" rows="3"
                                              class="form-control" disabled>{{ $item->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="attachments">Прикрепленные файлы</label>
                                    @if($item->attachments)
                                        <ul>
                                            @foreach($item->attachments as $attachment)
                                                <li>
                                                    <a href="{{ $attachment["url"] }}"
                                                       title="{{ $attachment["name"] }}"
                                                       target="_blank">{{ $attachment["name"] }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Ответ</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div id="replies" class="fields">
                                    @if($item->replies)
                                        @foreach($item->replies as $key => $reply)
                                            <div class="dynamic_field">
                                                <div class="form-group">
                                                    <label for="replies_{{ $key }}">Описание</label>
                                                    <textarea
                                                            name="replies[{{ $key }}]"
                                                            id="replies_{{ $key }}" cols="30"
                                                            rows="3"
                                                            class="form-control">{!! $reply !!}</textarea>
                                                </div>
                                                <hr>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <a class="btn btn-success add_replies" onclick="event.preventDefault();">Добавить</a>
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
                                    <label for="status">Статус</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="0"
                                                @if($item->status == 0) selected @endif>{{ __("default.pages.appeals.statuses.0") }}</option>
                                        <option value="1"
                                                @if($item->status == 1) selected @endif>{{ __("default.pages.appeals.statuses.1") }}</option>
                                        <option value="2"
                                                @if($item->status == 2) selected @endif>{{ __("default.pages.appeals.statuses.2") }}</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label>
                                        <input name="is_published" value="0" type="hidden">
                                        <input name="is_published" value="1" type="checkbox" class="js-switch"
                                               @if($item->is_published == 1) checked="checked" @endif> Опубликовать
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="on_main_page" value="0" type="hidden">
                                        <input name="on_main_page" value="1" type="checkbox" class="js-switch"
                                               @if($item->on_main_page == 1) checked="checked" @endif> На главную
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-success" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </form>
                @if(!empty($item->id))
                    <form action="/admin/appeal/{{ $item->id }}" method="POST">
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
    <script>
        $(".add_replies").click(function (e) {
            e.preventDefault();
            var count = $(".dynamic_field","#replies").length;
            $("#replies").append(
                '<div class="dynamic_field">' +
                '<div class="form-group">' +
                '<label for="replies_' + count + '">Описание</label>' +
                '<textarea name="replies[' + count + ']"' +
                'id="replies_{{ $lang }}_' + count + '" cols="30"' +
                'rows="3"' +
                'class="form-control"></textarea>' +
                '</div>'+
                '</div>' +
                '<hr>' );
            init_editor("#replies textarea", "ru");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            init_editor("#replies textarea", "ru");
            $("select").select2();
        });
    </script>
@endsection
