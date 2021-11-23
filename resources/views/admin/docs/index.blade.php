@extends('admin.layout')

@section('title', 'Все документы')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Документы</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/docs" method="get">
                            <div class="input-group">
                                <input type="text" name="term" class="form-control" placeholder="Поиск" value="{{ $term }}">
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
                            <h2>{{ $term ? 'Результат поиска': 'Список документов' }}</h2>
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
                                        <th>Название</th>
                                        <th>Опубликована</th>
                                        <th>Дата создания</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <th scope="row">{{ $item->id }}</th>
                                            <td><a href="/admin/doc/{{$item->id}}">{{ $item->name_ru }}</a></td>
                                            <td>{{ $item->is_published ? "Да" : "Нет" }}</td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <center><h1>По вашему поиску ничего найдено</h1></center>
                                <center>Показать <strong><a href="/admin/docs">список всех документов</a></strong></center>
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
