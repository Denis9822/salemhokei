@extends("admin.layout")

@section('head')
    <link rel="stylesheet"
          href="/assets/admin/vendors/plupload-2.3.6/js/jquery.plupload.queue/css/jquery.plupload.queue.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.css"/>
    <link rel="stylesheet" href="/assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/main.css"/>

    <style>
        .daterangepicker.single.ltr .ranges,
        .daterangepicker.single.ltr .calendar {
            float: none;
        }
    </style>
{{--    <link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen" />--}}
@endsection
@section('scripts')
    <script type="text/javascript">
        function init_editor() {
            tinymce.init({
                selector: 'textarea:not(.without-redactor)',
                language: 'ru',
                branding: false,
                images_upload_url: '/ajax_upload_image?_token={{ csrf_token() }}',
                files_upload_url: '/ajax_upload_file?_token={{ csrf_token() }}',
                automatic_uploads: false,
                min_height: 200,
                max_height: 300,
                relative_urls: false,
                remove_script_host: false,
                browser_spellcheck: true,
                convert_urls: true,
                plugins: "hr lists link image imagetools textcolor code fileupload media",
                menubar: "insert",
                toolbar: "newdocument code styleselect undo redo | bold italic underline strikethrough | " +
                    "alignleft aligncenter alignright alignjustify alignnone | " +
                    "formatselect | fontsizeselect | " +
                    "cut copy paste | outdent indent | blockquote | removeformat | hr | table | forecolor backcolor |" +
                    "bullist numlist | link unlink | image rotateleft rotateright flipv fliph editimage imageoptions | fileupload  | media | fullscreen",
                link_context_toolbar: true,
                file_browser_callback_types: 'file image media',
                style_formats: [{
                    title: 'Изображение слева',
                    selector: 'img',
                    styles: {
                        'float': 'left',
                        'margin': '0 10px 0 10px'
                    }
                },
                    {
                        title: 'Изображение справа',
                        selector: 'img',
                        styles: {
                            'float': 'right',
                            'margin': '0 0 10px 10px'
                        }
                    }
                ]
            });

            {{-- $('#description_ru, #description_en, #description_kk').redactor({ --}}
            {{-- imageUpload: '/redactoruploadimage?_token={{ csrf_token() }}', --}}
            {{-- fileUpload: '/redactoruploadfile?_token={{ csrf_token() }}', --}}
            {{-- observeLinks: true, --}}
            {{-- convertVideoLinks: true, --}}
            {{-- convertImageLinks: true, --}}
            {{-- lang: 'ru', --}}
            {{-- plugins: ['table'], --}}
            {{-- //wym: true, --}}
            {{-- toolbarFixed: true, --}}
            {{-- toolbarFixedBox: true, --}}
            {{-- minHeight: 200, --}}
            {{-- maxHeight: 500, --}}
            {{-- tabSpaces: 4, --}}
            {{-- linkSize: 50, --}}
            {{-- focus: false, --}}
            {{-- replaceDivs: false, --}}
            {{-- buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'underline', 'deleted', '|', --}}
            {{-- 'unorderedlist', 'orderedlist', 'outdent', 'indent', '|', 'table', 'link', '|', --}}
            {{-- 'alignment', '|', 'horizontalrule', '|', 'image', 'file', 'media'] --}}
            {{-- }); --}}
        }

        $(document).ready(function () {
            init_editor();
            $('#parent_id').select2();
        });
    </script>
    <script>
        @php($langs = ['ru', 'en', 'kk'])
        @foreach ($langs as $lang)
        {{-- $('#accordion_{{ $lang }} .fields textarea').not('.redactor').each(function () { --}}
        {{-- $(this).redactor({ --}}
        {{-- imageUpload: '/redactoruploadimage?_token={{ csrf_token() }}', --}}
        {{-- fileUpload: '/redactoruploadfile?_token={{ csrf_token() }}', --}}
        {{-- observeLinks: true, --}}
        {{-- convertVideoLinks: true, --}}
        {{-- convertImageLinks: true, --}}
        {{-- lang: 'ru', --}}
        {{-- plugins: ['table'], --}}
        {{-- //wym: true, --}}
        {{-- toolbarFixed: true, --}}
        {{-- toolbarFixedBox: true, --}}
        {{-- minHeight: 200, --}}
        {{-- maxHeight: 300, --}}
        {{-- tabSpaces: 4, --}}
        {{-- linkSize: 50, --}}
        {{-- focus: false, --}}
        {{-- replaceDivs: false, --}}
        {{-- buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'underline', 'deleted', '|', --}}
        {{-- 'unorderedlist', 'orderedlist', 'outdent', 'indent', '|', 'table', 'link', '|', --}}
        {{-- 'alignment', '|', 'horizontalrule', '|', 'image', 'file'] --}}
        {{-- }); --}}
        {{-- $(this).addClass('redactor'); --}}
        {{-- }); --}}

        $('#accordion_{{ $lang }} .add_dynamic_field').click(function (e) {
            // console.log('asd');
            e.preventDefault();
            var count = $('#accordion_{{ $lang }} .fields .dynamic_field').length;
            $('#accordion_{{ $lang }} .fields').append(
                '<div class="dynamic_field">' +
                '<div class="form-group">' +
                '<label for="accordion_{{ $lang }}[title][]">Заголовок</label>' +
                '<input type="text" name="accordion_{{ $lang }}[' + (count + 1) + '][title]"' +
                ' class="form-control"' +
                ' placeholder="Введите заголовок">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="accordion_{{ $lang }}[description][]">Описание</label>' +
                '<textarea name="accordion_{{ $lang }}[' + (count + 1) + '][description]"' +
                ' id="description_{{ $lang }}_' + (count + 1) + '"
            cols = "30"
            ' +
            ' rows="3"' +
            ' class="form-control"></textarea>' +
            '</div>' +
            '</div>' +
            '
            < hr > ');

            init_editor();
            {{-- $('#accordion_{{ $lang }} .fields textarea').not('.redactor').each(function () { --}}
            {{-- $(this).redactor({ --}}
            {{-- imageUpload: '/redactoruploadimage?_token={{ csrf_token() }}', --}}
            {{-- fileUpload: '/redactoruploadfile?_token={{ csrf_token() }}', --}}
            {{-- observeLinks: true, --}}
            {{-- convertVideoLinks: true, --}}
            {{-- convertImageLinks: true, --}}
            {{-- lang: 'ru', --}}
            {{-- plugins: ['table'], --}}
            {{-- //wym: true, --}}
            {{-- toolbarFixed: true, --}}
            {{-- toolbarFixedBox: true, --}}
            {{-- minHeight: 200, --}}
            {{-- maxHeight: 300, --}}
            {{-- tabSpaces: 4, --}}
            {{-- linkSize: 50, --}}
            {{-- focus: false, --}}
            {{-- replaceDivs: false, --}}
            {{-- buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'underline', 'deleted', '|', --}}
            {{-- 'unorderedlist', 'orderedlist', 'outdent', 'indent', '|', 'table', 'link', '|', --}}
            {{-- 'alignment', '|', 'horizontalrule', '|', 'image', 'file'] --}}
            {{-- }); --}}
            {{-- $(this).addClass('redactor'); --}}
            {{-- }) --}}
        });

        $('#employees_{{ $lang }} .add_dynamic_field').click(function (e) {
            e.preventDefault();
            var count = $('#employees_{{ $lang }} .fields .dynamic_field').length;
            $('#employees_{{ $lang }} .fields').append(
                '<div class="dynamic_field">' +
                '<input type="hidden" name="employees_{{ $lang }}[' + (count + 1) + '][old_img]" value="">' +
                '<div class="form-group">' +
                '<label for="employees_{{ $lang }}[' + (count + 1) + '][img]">Изображение</label>' +
                '<div>' +
                '<label class="btn btn-default btn-file" style="margin: 10px 0 0;">' +
                '<span>Загрузить изображение</span>' +
                '<input type="file" id="employees_{{ $lang }}[' + (count + 1) + '][img]"
            name = "employees_{{ $lang }}[' + (count + 1) + '][img]"
            style = "display: none;" > ' +
            '</label>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="employees_{{ $lang }}[title][]">ФИО</label>' +
            '<input type="text" name="employees_{{ $lang }}[' + (count + 1) + '][title]"' +
            ' class="form-control"' +
            ' placeholder="Введите ФИО">' +
            '</div>' +
            '<div class="form-group">' +
            '<label for="employees_{{ $lang }}[description][]">Описание</label>' +
            '<textarea name="employees_{{ $lang }}[' + (count + 1) + '][description]"' +
            ' id="employees_{{ $lang }}_' + (count + 1) + '"
            cols = "30"
            ' +
            ' rows="3"' +
            ' class="form-control"></textarea>' +
            '</div>' +
            '</div>' +
            '
            < hr > ');
            init_editor();
        });
        @endforeach
    </script>
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
                <form action="/admin/page/@if(empty($item->id))add @else {{ $item->id }} @endif" method="post"
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
                                        <li role="presentation" class="">
                                            <a href="#tab_public_url" role="tab" id="profile-tab3" data-toggle="tab"
                                               aria-expanded="false">адрес</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade active in" id="tab_ru_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has('name_ru') ? ' has-error' : '' }}">
                                                <label for="name_ru">Заголовок<span class="required">*</span></label>
                                                <input type="text" name="name_ru" id="name_ru" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_ru }}">
                                                @if ($errors->has('name_ru'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('name_ru') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div
                                                class="form-group {{ $errors->has('description_ru') ? ' has-error' : '' }}">
                                                <label for="description_ru">Описание</label>
                                                <textarea name="description_ru" id="description_ru" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_ru }}</textarea>
                                                @if ($errors->has('description_ru'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('description_ru') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_en_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has('name_en') ? ' has-error' : '' }}">
                                                <label for="name_en">Заголовок<span class="required">*</span></label>
                                                <input type="text" name="name_en" id="name_en" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_en }}">
                                                @if ($errors->has('name_en'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('name_en') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div
                                                class="form-group {{ $errors->has('description_en') ? ' has-error' : '' }}">
                                                <label for="description_en">Описание</label>
                                                <textarea name="description_en" id="description_en" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_en }}</textarea>
                                                @if ($errors->has('description_en'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('description_en') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_kk_content"
                                             aria-labelledby="home-tab">
                                            <div class="form-group {{ $errors->has('name_kk') ? ' has-error' : '' }}">
                                                <label for="name_kk">Заголовок<span class="required">*</span></label>
                                                <input type="text" name="name_kk" id="name_kk" class="form-control"
                                                       placeholder="Введите название" value="{{ $item->name_kk }}">
                                                @if ($errors->has('name_kk'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('name_kk') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                            <div
                                                class="form-group {{ $errors->has('description_kk') ? ' has-error' : '' }}">
                                                <label for="description_kk">Описание</label>
                                                <textarea name="description_kk" id="description_kk" cols="30" rows="3"
                                                          class="form-control">{{ $item->description_kk }}</textarea>
                                                @if ($errors->has('description_kk'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('description_kk') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab_public_url"
                                             aria-labelledby="home-tab">

                                            <h2>
                                                <a target="_blank"
                                                   href="/kk/pages/{{$item->alias}}">{{$item->alias}}</a> -
                                                KK
                                                <br/>
                                                <a target="_blank"
                                                   href="/ru/pages/{{$item->alias}}">{{$item->alias}}</a> -
                                                RU
                                            </h2>
                                        </div>
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
                                        @php($langs = [0 => 'ru', 1 => 'kk', 2 => 'en'])
                                        @foreach ($langs as $key => $lang)
                                            <div role="tabpanel" class="tab-pane fade @if ($key==0) active in @endif"
                                                 id="tab_seo_{{ $lang }}_content" aria-labelledby="home-tab">
                                                <input type="hidden" name="url" value="{{ $item->url }}">
                                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="meta_title_{!! $lang !!}">Meta title<span
                                                            class="required"></span></label>
                                                    <input type="text" name="meta_title_{!! $lang !!}"
                                                           id="meta_title_{!! $lang !!}" class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute("meta_title_$lang") }}">

                                                </div>
                                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="meta_description_{!! $lang !!}">Meta description<span
                                                            class="required"></span></label>
                                                    <textarea name="meta_description_{!! $lang !!}"
                                                              id="meta_description_{!! $lang !!}" cols="30" rows="3"
                                                              class="form-control">{{ $item->getAttribute("meta_description_$lang") }}</textarea>

                                                </div>
                                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <label for="open_graph_title_{!! $lang !!}">Open Graph title<span
                                                            class="required"></span></label>
                                                    <input type="text" name="open_graph_title_{!! $lang !!}"
                                                           id="open_graph_title_{!! $lang !!}" class="form-control"
                                                           placeholder=""
                                                           value="{{ $item->getAttribute("open_graph_title_$lang") }}">
                                                </div>
                                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
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

                    {{--                <div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--                    <div class="x_panel">--}}
                    {{--                        <div class="x_title">--}}
                    {{--                            <h2>Аккордеоны</h2>--}}
                    {{--                            <ul class="nav navbar-right panel_toolbox">--}}
                    {{--                                <li style="float: right!important;">--}}
                    {{--                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                            <div class="clearfix"></div>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="x_content" style="display: none;">--}}
                    {{--                            <div class="" role="tabpanel" data-example-id="togglable-tabs">--}}
                    {{--                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">--}}
                    {{--                                    <li role="presentation" class="active"><a href="#tab_accordion_ru_content"--}}
                    {{--                                            id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Русский--}}
                    {{--                                            язык</a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li role="presentation" class=""><a href="#tab_accordion_en_content" role="tab"--}}
                    {{--                                            id="profile-tab" data-toggle="tab" aria-expanded="false">Английский язык</a>--}}
                    {{--                                    </li>--}}
                    {{--                                    <li role="presentation" class=""><a href="#tab_accordion_kk_content" role="tab"--}}
                    {{--                                            id="profile-tab2" data-toggle="tab" aria-expanded="false">Казахский язык</a>--}}
                    {{--                                    </li>--}}
                    {{--                                </ul>--}}
                    {{--                                <div id="myTabContent" class="tab-content">--}}
                    {{--                                    @php($langs = [0 => 'ru', 1 => 'kk', 2 => 'en'])--}}
                    {{--                                    @foreach ($langs as $key => $lang)--}}
                    {{--                                    <div role="tabpanel" class="tab-pane fade @if ($key==0) active in @endif"--}}
                    {{--                                        id="tab_accordion_{{ $lang }}_content" aria-labelledby="home-tab">--}}
                    {{--                                        <div id="accordion_{{ $lang }}">--}}
                    {{--                                            <div class="fields">--}}
                    {{--                                                @if ($item->getAttribute('accordion_' . $lang))--}}
                    {{--                                                @foreach ($item->getAttribute('accordion_' . $lang) as $key =>--}}
                    {{--                                                $accordion)--}}
                    {{--                                                <div class="dynamic_field" data-key="{{ $key }}">--}}
                    {{--                                                    <div class="form-group">--}}
                    {{--                                                        <label for="accordion_{{ $lang }}['title'][]">Заголовок</label>--}}
                    {{--                                                        <input type="text"--}}
                    {{--                                                            name="accordion_{{ $lang }}[{{ $key }}][title]"--}}
                    {{--                                                            class="form-control" placeholder="Введите заголовок"--}}
                    {{--                                                            value="{{ $accordion['title'] }}">--}}
                    {{--                                                    </div>--}}
                    {{--                                                    <div class="form-group">--}}
                    {{--                                                        <label for="description_{{ $lang }}_{{ $key }}">Описание</label>--}}
                    {{--                                                        <textarea name="accordion_{{ $lang }}[{{ $key }}][description]"--}}
                    {{--                                                            id="description_{{ $lang }}_{{ $key }}" cols="30" rows="3"--}}
                    {{--                                                            class="form-control">{!! $accordion['description'] !!}</textarea>--}}
                    {{--                                                    </div>--}}
                    {{--                                                    <hr>--}}
                    {{--                                                </div>--}}
                    {{--                                                @endforeach--}}
                    {{--                                                @endif--}}
                    {{--                                            </div>--}}
                    {{--                                            <a class="btn btn-success add_dynamic_field" href="#"--}}
                    {{--                                                onclick="event.preventDefault(); add_accordion('accordion_{{ $lang }}');">Добавить</a>--}}
                    {{--                                        </div>--}}
                    {{--                                    </div>--}}
                    {{--                                    @endforeach--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}

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
                            <div class="x_content row">
                                {{--                            <input type="hidden" name="url" value="{{ $item->url }}">--}}
                                {{-- <div class="form-group project_avatar t-table"> --}}
                                {{-- <input type="hidden" name="image" value="{{ $item->avatar }}" id="avatar" --}}
                                {{-- data-drop-element-id="pick_image" --}}
                                {{-- data-progressbar-id="image-progressbar"> --}}
                                {{-- <div class="t-td" style="width: 150px; padding: 10px;"> --}}
                                {{-- <a class="fancybox" --}}
                                {{-- href="{{ ($item->avatar) ? $item->avatar : '/assets/admin/img/user_photo.png' }}" --}}
                                {{-- target="_blank"> --}}
                                {{-- <img src="{{ ($item->avatar) ? $item->avatar : '/assets/admin/img/user_photo.png' }}">
                                --}}
                                {{-- </a> --}}
                                {{-- </div> --}}
                                {{-- <div id="pick_image" class="t-td"> --}}
                                {{-- <div class="drop-zone"> --}}
                                {{-- <strong>Выберите изображение</strong><br> --}}
                                {{-- JPEG или PNG • 10 MB --}}
                                {{-- </div> --}}
                                {{-- <div id="image-progressbar" class="progress progress-striped active"> --}}
                                {{-- <div class="progress-bar progress-bar-warning" role="progressbar" --}}
                                {{-- aria-valuenow="0" --}}
                                {{-- aria-valuemin="0" aria-valuemax="100" style="width: 0%"> --}}
                                {{-- <span class="sr-only">0% Готово</span> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- <div class="clear"></div> --}}
                                {{-- </div> --}}
                                {{-- <div class="form-group"> --}}
                                {{-- <label for="published_at">Дата публикации<span class="required">*</span></label> --}}
                                {{-- <fieldset> --}}
                                {{-- <div class="control-group"> --}}
                                {{-- <div class="controls"> --}}
                                {{-- <div class="input-prepend input-group"> --}}
                                {{-- <span class="add-on input-group-addon"><i --}}
                                {{-- class="glyphicon glyphicon-calendar fa fa-calendar"></i></span> --}}
                                {{-- <input type="text" name="published_at" id="published_at" --}}
                                {{-- class="form-control" --}}
                                {{-- value="@if (empty($item->published_at)){{ date("Y-m-d H:i") }}@else{{ date("Y-m-d H:i", strtotime($item->published_at)) }}@endif"
                                --}}
                                {{-- /> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </div> --}}
                                {{-- </fieldset> --}}
                                {{-- </div> --}}
                                <div class="col-md-6 col-sm-6 col-xs-6">

                                    <div class="form-group">
                                        <label>
                                            <input name="is_published" value="0" type="hidden">
                                            <input name="is_published" value="1" type="checkbox" class="js-switch"
                                                   @if ($item->is_published == 1) checked="checked" @endif>
                                            Опубликовать
                                        </label>

                                    </div>


                                </div>

                            </div>
                            <div class="row">
                                <input type="submit" class="btn btn-success" value="Сохранить">
                                @if (!empty($item->id))
                                    @can('page')
                                    @endcan
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
                    <div class="col-md-6 col-sm-6 col-xs-6">

                        @can('page.delete')
                            @if (!empty($item))
                                <form action='/admin/page/{{$item->id}}'
                                      method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <div class="input-group">
                                                    <span class="input-group-addon" style="width: 100%">При удалении, все данные будут
                                                        удалены</span>
                                        <span class="input-group-btn">
                                                        <button class="btn btn-danger">Удалить</button>
                                                    </span>
                                    </div>
                                </form>
                            @endif
                        @endcan
                    </div>


            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/assets/admin/vendors/tinymce/tinymce.min.js?apiKey=hn939jagzy31qbhyi2bwcnw3dn5l44sft7wylapoxgu10nuk">
    </script>
    <script type="text/javascript">
        function init_editor(id, language) {
            tinymce.init({
                selector: 'textarea',
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
                style_formats: [{
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
                filters: [{
                    title: "Image files",
                    extensions: "jpg,png,jpe,jpeg"
                },],
                resize: {
                    width: 2000,
                    height: 2000,
                    quality: 90,
                    crop: false
                },
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
                progressbar.find(".progress-bar").css({
                    width: 0
                });
                progressbar.show();
                up.refresh(); // Reposition Flash/Silverlight
                $("#" + object.attr("data-drop-element-id") + " > .drop-zone").hide();
                setTimeout(function () {
                    up.start();
                }, 200);
            });

            image.bind("UploadProgress", function (up, file) {
                //$("#" + file.id).html(file.name + " - " + file.percent + "%");
                progressbar.find(".progress-bar").css({
                    width: file.percent + "%"
                });
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
            init_editor("#acc_ru", "ru");
            init_editor("#acc_en", "en");
            init_editor("#acc_kk", "kk");

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
                    monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь",
                        "Октябрь", "Ноябрь", "Декабрь"
                    ],
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
    <script>
        @php($languages = ['ru', 'en', 'kk'])
        @foreach ($languages as $lang)
        $('#accordion_{{ $lang }} .add_dynamic_field').click(function (e) {
            e.preventDefault();
            var count = $('#accordion_{{ $lang }} .fields .dynamic_field').length;
            $('#accordion_{{ $lang }} .fields').append(
                '<div class="dynamic_field">' +
                '<div class="form-group">' +
                '<label for="accordions_{!! $lang !!}[number][]">Порядковый номер</label>' +
                '<input type="number" min="0" step="1" name="accordions_{!! $lang !!}[' + (count + 1) + '][number]"' +
                ' class="form-control"' +
                ' placeholder="Введите порядковый номер">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="accordions_{!! $lang !!}[title][]">Название</label>' +
                '<input type="text" name="accordions_{!! $lang !!}[' + (count + 1) + '][title]"' +
                ' class="form-control"' +
                ' placeholder="Введите название">' +
                '</div>' +

                '<div class="form-group">' +
                '<label for="accordions_{!! $lang !!}[description][]">Описание</label>' +
                '<input type="text" name="accordions_{!! $lang !!}[' + (count + 1) + '][description]"' +
                ' class="form-control"' +
                ' placeholder="Введите описание">' +
                '</div>' +
                '</div>' +
                '<div class="form-group {{ $errors->has('description_en') ? ' has-error' : '' }}">' +
                '<label for="accordions_{!! $lang !!}[description][]">Описание</label>' +
                '<textarea name="accordions_{{ $lang }}[' + (count + 1) + '][description]"
            id = "description_{{ $lang }}_' + (count + 1) + '"
            cols = "30"
            rows = "3"

            class

            = "form-control" > < /textarea>'
                +
                '</div>' +
                '</div>' +
                '
                < hr > ');

            init_editor();

            $('#employees_{{ $lang }} .add_dynamic_field').click(function (e) {
                e.preventDefault();
                var count = $('#employees_{{ $lang }} .fields .dynamic_field').length;
                $('#employees_{{ $lang }} .fields').append(
                    '<div class="dynamic_field">' +
                    '<input type="hidden" name="employees_{{ $lang }}[' + (count + 1) + '][old_img]" value="">' +
                    '<div class="form-group">' +
                    '<label for="employees_{{ $lang }}[' + (count + 1) + '][img]">Изображение</label>' +
                    '<div>' +
                    '<label class="btn btn-default btn-file" style="margin: 10px 0 0;">' +
                    '<span>Загрузить изображение</span>' +
                    '<input type="file" id="employees_{{ $lang }}[' + (count + 1) + '][img]"
                name = "employees_{{ $lang }}[' + (count + 1) + '][img]"
                style = "display: none;" > ' +
                '</label>' +
                '</div>' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="employees_{{ $lang }}[title][]">ФИО</label>' +
                '<input type="text" name="employees_{{ $lang }}[' + (count + 1) + '][title]"' +
                ' class="form-control"' +
                ' placeholder="Введите ФИО">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="employees_{{ $lang }}[description][]">Описание</label>' +
                '<textarea name="employees_{{ $lang }}[' + (count + 1) + '][description]"' +
                '
                id = "employees_{{ $lang }}_' + (count + 1) + '"
                cols = "30"
                ' +
                ' rows="3"' +
                ' class="form-control"></textarea>' +
                '</div>' +
                '</div>' +
                '
                < hr > ');
                init_editor();
            });

        });
        @endforeach
    </script>
    <script>
        @php($languages = ['ru', 'en', 'kk'])
        @foreach ($languages as $lang)
        $('#staff_{{ $lang }} .add_dynamic_field').click(function (e) {
            e.preventDefault();
            var count = $('#staff_{{ $lang }} .fields .dynamic_field').length;
            $('#staff_{{ $lang }} .fields').append(
                '<div class="dynamic_field">' +
                '<div class="form-group">' +
                '<label for="staff_{!! $lang !!}[number][]">Порядковый номер</label>' +
                '<input type="number" min="0" step="1" name="staff_{!! $lang !!}[' + (count + 1) + '][number]"' +
                ' class="form-control"' +
                ' placeholder="Введите порядковый номер">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="staff_{!! $lang !!}[title][]">ФИО</label>' +
                '<input type="text" name="staff_{!! $lang !!}[' + (count + 1) + '][title]"' +
                ' class="form-control"' +
                ' placeholder="Введите ФИО сотрудника">' +
                '</div>' +
                '<div class="form-group">' +
                '<label for="staff_{!! $lang !!}[description][]">Должность</label>' +
                '<input type="text" name="staff_{!! $lang !!}[' + (count + 1) + '][description]"' +
                ' class="form-control"' +
                ' placeholder="Введите должность сотрудника">' +
                '</div>' +
                '</div>' +

                {{-- '<div class="dynamic_field">' + --}}
                    {{-- '<input type="hidden" name="staff_{{ $lang }}[' + (count + 1) + '][image]" value="">' + --}}
                    {{-- '<div class="form-group">' + --}}
                    {{-- '<label for="staff_{{ $lang }}[' + (count + 1) + '][image]">Изображение</label>' + --}}
                    {{-- '<div>' + --}}
                    {{-- '<label class="btn btn-default btn-file" style="margin: 10px 0 0;">' + --}}
                    {{-- '<span>Загрузить изображение</span>' + --}}
                    {{-- '<input type="file" id="staff_{{ $lang }}[' + (count + 1) + '][image]" name="staff_{{ $lang }}[' + (count + 1) + '][image]" style="display: none;">' + --}}
                    {{-- '</label>' + --}}
                    {{-- '</div>' + --}}
                    {{-- '</div>' + --}}


                    '
                < hr > ');

            init_editor();
        });
        @endforeach
    </script>

@endsection
