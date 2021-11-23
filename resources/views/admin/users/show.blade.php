@extends("admin.layout")

@section("head")

@endsection

@section("title")
    Пользователь: {{ $item->name }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/users/">Все пользователи</a></li>
                        <li class="active">{{ $item->name }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/users/" method="get">
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
                @if(session("new_password"))
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="alert alert-success" role="alert">
                            Пароль пользователя: <strong>{{ session("new_password") }}</strong>
                        </div>
                    </div>
                @endif

                <form class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Данные пользователя</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                    <label for="name">ФИО<span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Введите название" value="{{ old("name", $item->name) }}"
                                           required>
                                    @include("admin.partials.error",["key" => "name"])
                                </div>
                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           placeholder="Введите email" value="{{ old("email", $item->email) }}"
                                           required>
                                    @include("admin.partials.error",["key" => "email"])
                                </div>
                                @if(empty($item->id))
                                    <div class="form-group {{ $errors->has("password") ? " has-error" : "" }}">
                                        <label for="password">Пароль<span class="required">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control"
                                               placeholder="Введите пароль"
                                               value="{{ old("password", $item->password) }}"
                                               required>
                                        @include("admin.partials.error",["key" => "password"])
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Настройка</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group">
                                    <label for="role">Роль пользователя<span class="required">*</span></label>
                                    <select name="role" id="role" class="form-control">
                                        @foreach($roles as $role)
                                            @if(!empty($item->id))
                                                <option @if($item->categories[0]->pivot->role_id == $role->id) selected
                                                        @endif value="{{ $role->id }}">{{ $role->name }}</option>
                                            @else
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endif
                                        @endforeach
                                        {{--<option @if(old("role") == "redactor") selected--}}
                                        {{--@elseif(old("role") == null && $item->hasRole("redactor")) selected--}}
                                        {{--@endif value="redactor">--}}
                                        {{--Редактор контента--}}
                                        {{--</option>--}}
                                        {{--<option @if(old("role") == "admin") selected--}}
                                        {{--@elseif(old("role") == null && $item->hasRole("admin")) selected--}}
                                        {{--@endif value="admin">--}}
                                        {{--Администратор--}}
                                        {{--</option>--}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @if(!empty($item->id))
                    @can("user.delete")
                        <form action="/admin/user/{{ $item->id }}" method="POST">
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
                    @endcan
                @endif
            </div>
        </div>
    </div>

@endsection

@section("scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $("#role").select2();
        });
    </script>
@endsection
