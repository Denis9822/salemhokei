@extends('admin.layout')

@section('title', 'Все пользователи')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Пользователи</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/users" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск пользователя"
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
                @if(session('status'))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            <strong>{{ session('status') }}</strong>
                        </div>
                    </div>
                @endif
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{ $term ? 'Результат поиска': 'Список пользователей' }}</h2>
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
                                        <th>Email</th>
                                        {{--<th>Email подтвержден</th>--}}
                                        <th>Роль</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <th scope="row">{{ $item->id }}</th>
                                            <td><a href="/admin/user/{{$item->id}}">{{ $item->name }}</a></td>
                                            <td>{{ $item->email }}</td>
                                            {{--<td>@if($item->email_verified_at)--}}
                                                    {{--<span class="label label-success">Да</span>--}}
                                                {{--@else--}}
                                                    {{--<span class="label label-warning">Нет</span>--}}
                                                {{--@endif--}}
                                            {{--</td>--}}
                                            <td>
                                                @if($item->hasRole("redactor"))
                                                    <span class="label label-info">Редактор контента</span>
                                                @elseif($item->hasRole("admin"))
                                                    <span class="label label-warning">Администратор</span>
                                                @else
                                                    <span class="label label-alert">Не выбрано</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <center><h1>По вашему поиску ничего найдено</h1></center>
                                <center>Показать <strong><a href="/admin/users">список всех пользователей</a></strong>
                                </center>
                            @endif
                        </div>
                        <div class="text-center">
                            {{ $items->appends(['term' => $term])->links('vendor.pagination.bootstrap') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
