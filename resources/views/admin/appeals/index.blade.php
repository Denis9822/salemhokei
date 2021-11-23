@extends("admin.layout")

@section("title", "Все заявки")

@section("head")
    <style>
        tr th, tr td, .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
            vertical-align: middle;
        }
    </style>
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Обращения</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/appeals" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск"
                                       value="{{ $term }}">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ $term ? "Результат поиска": "Список обращений" }}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li style="float: right!important;">
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            @if(count($items)>0)
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ФИО</th>
                                        <th>Превью</th>
                                        <th>Язык</th>
                                        <th>Статус</th>
                                        <th>Опубликован</th>
                                        <th>На главной</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr style="vertical-align: middle;">
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>
                                                <a href="/admin/appeal/{{$item->id}}">{{ $item->author->surname." ".$item->author->name." ".$item->author->patronymic }}</a>
                                            </td>
                                            <td>{{ $item->preview() }}</td>
                                            <td>{{ $item->lang }}</td>
                                            <td style="font-size: 1.2em;">
                                                @if($item->status == 1)
                                                    <span class="label label-info">{{ __("default.pages.appeals.statuses.".$item->status) }}</span>
                                                @elseif($item->status == 2)
                                                    <span class="label label-success">{{ __("default.pages.appeals.statuses.".$item->status) }}</span>
                                                @else
                                                    <span class="label label-warning">{{ __("default.pages.appeals.statuses.".$item->status) }}</span>
                                                @endif
                                            </td>
                                            <td style="font-size: 1.2em;">
                                                @if(!$item->is_published)
                                                    <span class="label label-warning">Нет</span>
                                                @else
                                                    <span class="label label-success">Да</span>
                                                @endif
                                            </td>
                                            <td style="font-size: 1.2em;">
                                                @if(!$item->on_main_page)
                                                    <span class="label label-warning">Нет</span>
                                                @else
                                                    <span class="label label-success">Да</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <center><h1>По вашему поиску ничего найдено</h1></center>
                                <center>Показать <strong><a href="/admin/appeals">список всех обращений</a></strong>
                                </center>
                            @endif
                        </div>
                        <div class="text-center">
                            {{ $items->appends(request()->query())->links("vendor.pagination.bootstrap") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
