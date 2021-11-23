@if(!empty($page->accordion))
    <div class="spoilers">
        @foreach($page->accordion as $item)
            <div class="spoiler">
                <div class="spoiler__title"><span>{{ $item["title"] }}</span></div>
                <div class="spoiler__desc">
                    <div class="plain-text">
                        {!! $item["description"] !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
