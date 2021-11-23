@extends("app.layout.index")

@section("title", "Вход | ".__("default.site_name"))

@section("content")
    <section class="less-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-8">
                    <h1 class="title-primary text-center">Вход</h1>
                    @if(session("login_error"))
                        @include("app.partials.error")
                    @endif
                    <form action="/login" method="post">
                        {{ csrf_field() }}
                        <div class="preloader"></div>
                        <div class="input-group">
                            <input type="text" name="email" class="input-regular text-center" placeholder="Логин*"
                                   required value="{{ old("email") }}">
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" class="input-regular text-center"
                                   placeholder="Пароль*" required value="{{ old("password") }}">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn">Войти</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
