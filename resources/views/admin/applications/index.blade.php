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
                    <h3>Заявки</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/applications" method="get">
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
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Фильтр</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li style="float: right!important;">
                                    <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="display: none;">
                            <form action="/admin/applications" method="get">
                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input type="text" name="surname" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Отчество</label>
                                    <input type="text" name="patronymic" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Тип участника</label>
                                    <select name="type" class="form-control">
                                        <option value="2">Болельщик</option>
                                        <option value="1">Участник</option>
                                        <option value="3">Команда</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ИИН</label>
                                    <input type="text" name="iin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Статус</label>
                                    <select name="status" class="form-control">
                                        <option value="0">На рассмотрении</option>
                                        <option value="1">Одобрено</option>
                                        <option value="2">Отклонено</option>
                                    </select>
                                </div>
                                <a href="/admin/applications" class="btn btn-warning">Сбросить</a>
                                <button class="btn btn-primary" type="submit">Найти</button>
                            </form>
                        </div>
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
                            <h2>{{ $term ? "Результат поиска": "Список заявок" }}</h2>
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
                                        <th>Тип участника</th>
                                        <th>Спорт</th>
                                        <th>ИИН</th>
                                        <th>Номер телефона</th>
                                        <th>Email</th>
                                        <th>Подтвержден</th>
                                        <th>Статус</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr style="vertical-align: middle;">
                                            <th scope="row">{{ $item->id }}</th>
                                            <td>
                                                <a href="/admin/application/{{$item->id}}">{{ $item->surname." ".$item->name." ".$item->patronymic }}</a>
                                            </td>
                                            <td style="font-size: 1.2em;">
                                                @if($item->type == 3)
                                                    <span class="label label-primary">Команда</span>
                                                @elseif($item->type == 2)
                                                    <span class="label label-success">Болельщик</span>
                                                @else
                                                    <span class="label label-info">Участник</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->sport }}</td>
                                            <td>{{ $item->iin }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td style="font-size: 1.2em;">
                                                @if($item->is_verified)
                                                    <span class="label label-success">Да</span>
                                                @else
                                                    <span class="label label-danger">Нет</span>
                                                @endif
                                            </td>
                                            <td style="font-size: 1.2em;">
                                                @if($item->status == 1)
                                                    <span class="label label-success">Одобрено</span>
                                                @elseif($item->status == 2)
                                                    <span class="label label-warning">Отклонено</span>
                                                @else
                                                    <span class="label label-info">На рассмотрении</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <center><h1>По вашему поиску ничего найдено</h1></center>
                                <center>Показать <strong><a href="/admin/applications">список всех записей</a></strong>
                                </center>
                            @endif
                        </div>
                        <div class="text-center">
                            {{ $items->appends(request()->query())->links("vendor.pagination.bootstrap") }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Статистика</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li style="float: right!important;">
                                    <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content" style="display: none;">
                            @foreach($statistic as $key => $value)
                                <p><strong>{{ $key }}:</strong> {{ $value }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
