@extends('admin.pages.auth.layout')

@section('content')
    <form method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <h1>Регистрация</h1>

        <div>
            <input id="name" type="text" name="name" class="form-control" placeholder="ФИО" required="required" />
            @if ($errors->has('name'))
                <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
            @endif
        </div>
        <div>
            <input id="email" type="email" name="email" class="form-control" placeholder="Email" required="required" value="{{ old('email') }}" />
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
            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" placeholder="Подтвердите пароль" data-validate-length="8,16" required="required" />
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
            @endif
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                Зарегистрироваться
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
