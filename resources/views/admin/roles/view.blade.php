@extends("admin.layout")

@section("head")

@endsection

@section("title")
    Роль: {{ $item->name }}
@endsection

@section("content")
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <ol class="breadcrumb">
                        <li><a href="/admin/roles/">Все роли</a></li>
                        <li class="active">{{ $item->name }}</li>
                    </ol>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <form action="/admin/roles/" method="get">
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

                <form action="/admin/role/{{ $item->id ? $item->id : "add" }}" method="post"
                      enctype="multipart/form-data" class="form-horizontal form-label-left">
                    {{ csrf_field() }}
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Роль</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="form-group {{ $errors->has("name") ? " has-error" : "" }}">
                                    <label for="name">Название<span class="required">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           placeholder="Введите название" value="{{ old("name", $item->name) }}"
                                           required>
                                    @include("admin.partials.error",["key" => "name"])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Права</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li style="float: right!important;">
                                        <a class="collapse-link"><i class="fa fa-chevron-down"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content" style="display: none;">
                                @foreach($permissions as $permission)
                                    <div class="form-group">
                                        <label>
                                            <input name="permissions[]" value="{{ $permission->id }}"
                                                   type="checkbox" class="js-switch"
                                                   @if($item->permissions->contains($permission->id)) checked="checked" @endif>
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="x_panel">
                            <div class="x_content">
                                <input type="submit" class="btn btn-primary btn-lg" value="Сохранить">
                            </div>
                        </div>
                    </div>

                </form>
                @if(!empty($item->id))
                    @can("user_role")
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
