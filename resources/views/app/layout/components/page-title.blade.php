<section class="blue-title">
    <div class="container">
        <div class="title-block text-center">
            <h1 class="title-primary">
{{--                {{\Request::url()}}--}}
{{--                {{request()->path()}}--}}
{{--                {{parse_url(\Request::url())['path']}}--}}
{{--                {{}}--}}
                @php
                    $parsedUrl = parse_url(\Request::url());
                    $currentPath = $parsedUrl['path'];
                @endphp
                @foreach($MyNavBar->roots() as $item)
                    @php
                        $parsedUrl = parse_url($item->url());
                        $path = $parsedUrl['path'];
                    @endphp
{{--                    {{$item->url()}}--}}
                    @if($path == $currentPath)
                        {!! $item->title !!}
                    @endif
                @endforeach
            </h1>
        </div>
    </div>
</section>
