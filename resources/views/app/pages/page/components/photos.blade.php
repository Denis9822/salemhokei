@if($items && $items->count() > 0)
    <div class="gallery row row--multiline">
        @foreach($items as $item)
            <div class="col-md-3 col-sm-3 col-xs-2">
                <a href="{{ $item->img }}" data-fancybox="gallery" title=""><img src="{{ $item->img }}" alt=""></a>
            </div>
        @endforeach
    </div>
@endif
