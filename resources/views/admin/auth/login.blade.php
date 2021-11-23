@extends('admin.auth.layout')

@section('content')
    <form method="POST" action="{{ url('/admin/login') }}">
    {{ csrf_field() }}
    <h1>Авторизация</h1>
    <div>
        <input id="email" type="email" name="email" class="form-control" placeholder="Email" required="required" />
        @if ($errors->has('email'))
            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
        @endif
    </div>
    <div>
        <input id="password" type="password" name="password" class="form-control" placeholder="Пароль" data-validate-length="8,16" required="required" />
        @if ($errors->has('password'))
            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
        @endif
    </div>
        <div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="flat" name="remember" checked="{{ old('remember') ? 'checked' : '' }}"> Запомнить
                </label>
            </div>
            <button type="submit" class="btn btn-primary">
                Вход
            </button>
        </div>

    <div class="clearfix"></div>

    <div class="separator">
        <div>
            <p>©{{ date("Y") }} All Rights Reserved</p>
        </div>
    </div>
</form>
@endsection
