@extends("app.layout.index")

@section("title",__("default.pages.user_appeals.title")." | ".__("default.site_name"))

@section("content")
    <section>
        <div class="container">
            <h2 class="title-primary">{{ __("default.pages.user_appeals.title") }}</h2>
            @include("app.partials.verify_phone_required",["item" => $item])
            @if(session("success_message"))
                <div class="alert alert-success">{!! session("success_message") !!}</div>
            @endif
            <div class="row row--multiline">
                @foreach($items as $item)
                    <div class="col-xs-12">
                        <a href="{{ "/$lang/appeal/".$item->id }}" title="" class="card">
                            <h3 class="card__title">{{ $item->preview() }}</h3>
                            <div class="card__info">
                                <div class="card__date">{{ $item->created_at->format("d.m.Y") }}</div>
                                <div class="card__status @if($item->status == 1) yellow @elseif($item->status == 2) green @endif">{{ __("default.pages.appeals.statuses.".$item->status) }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <br>
            {{ $items->links("vendor.pagination.simple") }}
        </div>
    </section>
@endsection

@section("scripts")

@endsection
