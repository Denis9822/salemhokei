@if(!empty($page->employees))
    <section>
        <div class="row row--multiline">
            @foreach($page->employees as $item)
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="organizer-card">
                        <div class="organizer-card__image">
                            <img src="{{ isset($item["img"]) ? $item["img"] : "/assets/img/organisers/avatar-placeholder.png" }}" alt="">
                        </div>
                        <div class="organizer-card__desc">
                            <h4 class="organizer-card__title">{{ $item["title"] }}</h4>
                            <div class="organizer-card__annotation">
                                {!! $item["description"] !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
