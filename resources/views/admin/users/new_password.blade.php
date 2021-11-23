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
                        <div class="alert alert-danger" role="alert">
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

                <form action="/admin/user/new_password_save/{{ $item->id}}" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Сменить пароль</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                    <label for="old_password">Текущий пароль<span class="required">*</span></label>
                                    <input type="password" name="old_password" id="old_password" class="form-control"
                                           placeholder="Введите текущий пароль" value=""
                                           required>
                                    @include("admin.partials.error",["key" => "old_password"])
                                </div>
                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                    <label for="new_password">Новый пароль<span class="required">*</span></label>
                                    <input type="password" name="new_password" id="new_password" class="form-control"
                                           placeholder="Введите новый пароль" value=""
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
                            <div class="x_content">
                                <input type="submit" class="btn btn-primary btn-lg" value="Сохранить">
                            </div>
                        </div>
                    </div>
                </form>
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
