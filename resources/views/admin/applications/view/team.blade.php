@extends("admin.layout")

@section("title")
    Заявка №{{ $item->id }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/applications/">Все статьи</a></li>
                        <li class="active">{{ $item->surname." ".$item->name." ".$item->patronymic }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/applications/" method="get">
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
                <form action="/admin/application/@if(empty($item->id))add @else{{ $item->id }} @endif" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Заявка пользователя</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label>Тип</label>
                                    <input type="text" class="form-control" value="Команда" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Регион</label>
                                    <input type="text" class="form-control"
                                           value="{{ $item->region ? $item->region : "Не указан" }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Вид спорта</label>
                                    <input type="text" class="form-control" value="{{ $item->sport }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input type="text" class="form-control" value="{{ $item->surname }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" class="form-control" value="{{ $item->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Отчество</label>
                                    <input type="text" class="form-control" value="{{ $item->patronymic }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" value="{{ $item->email }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Email подтвержден: </label>
                                    @if($item->is_verified)
                                        <span class="label label-success">Да</span>
                                    @else
                                        <span class="label label-danger">Нет</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Номер телефона</label>
                                    <input type="text" class="form-control" value="{{ $item->phone }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>ИИН</label>
                                    <input type="text" class="form-control" value="{{ $item->iin }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Номер участника</label>
                                    <input type="text" class="form-control"
                                           value="@if($item->status == 1){{ \App\Helpers\Helper::getMemberNumber($item->iin) }}@endif"
                                           disabled>
                                </div>
                                <div class="form-group">
                                    <label>Дата рождения</label>
                                    <input type="text" class="form-control" value="{{ $item->birthday }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Пол</label>
                                    <input type="text" class="form-control" value="{{ $item->gender }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Организация</label>
                                    <input type="text" class="form-control" value="{{ $item->organization }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Бин организации</label>
                                    <input type="text" class="form-control" value="{{ $item->bin }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label>Документ, подтверждающий пенсионные отчисления сотрудника (не менее трех
                                        месяцев). Информация конфиденциальна, и не предоставляется третьим лицам</label>
                                    <br><a href="{{ $item->document_1 }}" target="_blank"
                                           class="btn btn-primary">{{ $item->document_1 }}</a>
                                </div>
                                <div class="form-group">
                                    <label>Заполненная техническая заявка, установленной формы по виду спорта
                                        (Приложение №1 к настоящему Регламенту)</label>
                                    <br><a href="{{ $item->document_2 }}" target="_blank"
                                           class="btn btn-primary">{{ $item->document_2 }}</a>
                                </div>
                                <div class="form-group">
                                    <label>Документ, подтверждающий личность (удостоверение личности или паспорт – на
                                        каждого участника Спартакиады)</label>
                                    <br><a href="{{ $item->document_3 }}" target="_blank"
                                           class="btn btn-primary">{{ $item->document_3 }}</a>
                                </div>
                                <div class="form-group">
                                    <label>Заявление о личной ответственности на каждого участника Спартакиады
                                        (Приложение №3 к настоящему Регламенту)</label>
                                    <br><a href="{{ $item->document_4 }}" target="_blank"
                                           class="btn btn-primary">{{ $item->document_4 }}</a>
                                </div>

                                <br>
                                @foreach($item->team as $key => $teamMember)
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Участник {{ $key+1 }}</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li style="float: right!important;">
                                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <div class="form-group">
                                                <label>Фамилия</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $teamMember["surname"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Имя</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $teamMember["name"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Отчество</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $teamMember["patronymic"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>ИИН</label>
                                                <input type="text" class="form-control" value="{{ $teamMember["iin"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Номер участника</label>
                                                <input type="text" class="form-control"
                                                       value="@if($item->status == 1){{ \App\Helpers\Helper::getMemberNumber($teamMember["iin"]) }}@endif"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Дата рождения</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $teamMember["birthday"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Пол</label>
                                                <input type="text" class="form-control"
                                                       value="{{ $teamMember["gender"] }}"
                                                       disabled>
                                            </div>
                                            <div class="form-group">
                                                <label>Документ, подтверждающий пенсионные отчисления сотрудника (не
                                                    менее
                                                    трех
                                                    месяцев). Информация конфиденциальна, и не предоставляется третьим
                                                    лицам</label>
                                                <br><a href="{{ $teamMember["document_1"] }}" target="_blank"
                                                       class="btn btn-primary">{{ $teamMember["document_1"] }}</a>
                                            </div>
                                            <div class="form-group">
                                                <label>Заполненная техническая заявка, установленной формы по виду
                                                    спорта
                                                    (Приложение №1 к настоящему Регламенту)</label>
                                                <br><a href="{{ $teamMember["document_2"] }}" target="_blank"
                                                       class="btn btn-primary">{{ $teamMember["document_2"] }}</a>
                                            </div>
                                            <div class="form-group">
                                                <label>Документ, подтверждающий личность (удостоверение личности или
                                                    паспорт
                                                    – на
                                                    каждого участника Спартакиады)</label>
                                                <br><a href="{{ $teamMember["document_3"] }}" target="_blank"
                                                       class="btn btn-primary">{{ $teamMember["document_3"]}}</a>
                                            </div>
                                            <div class="form-group">
                                                <label>Заявление о личной ответственности на каждого участника
                                                    Спартакиады
                                                    (Приложение №3 к настоящему Регламенту)</label>
                                                <br><a href="{{ $teamMember["document_4"] }}" target="_blank"
                                                       class="btn btn-primary">{{ $teamMember["document_4"] }}</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="form-group">
                                    <label>Статус</label>
                                    <select name="status" class="form-control">
                                        <option value="0" @if($item->status == 0) selected @endif>На рассмотрении
                                        </option>
                                        <option value="1" @if($item->status == 1) selected @endif>Одобрено</option>
                                        <option value="2" @if($item->status == 2) selected @endif>Отклонено</option>
                                    </select>
                                </div>
                                <input type="submit" class="btn btn-success" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </form>
                @if(!empty($item->id))
                    {{--<form action="/admin/application/{{ $item->id }}" method="POST">--}}
                    {{--{{ csrf_field() }}--}}
                    {{--{{ method_field("DELETE") }}--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading">Удаление</div>--}}
                    {{--<div class="panel-body">--}}
                    {{--<div class="input-group">--}}
                    {{--<span class="input-group-addon" style="width: 100%">При удалении, все данные будут удалены</span>--}}
                    {{--<span class="input-group-btn">--}}
                    {{--<button class="btn btn-danger">Удалить</button>--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}
                @endif
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").select2();
        });
    </script>
@endsection
