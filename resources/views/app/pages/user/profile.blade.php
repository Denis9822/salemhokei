@extends("app.layout.index")

@section("title",__("default.pages.profile.title")." | ".__("default.site_name"))

@section("content")
    <section class="less-padding">
        <div class="container">
            <h1 class="title-primary">Личный кабинет</h1>
            <div class="agreement">
                <div class="title-tertiary">Добро пожаловать в ваш личный кабинет, {{ $user->name }}</div>
                <div class="plain-text">Здесь вскоре появятся ваши договора.</div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")

@endsection
