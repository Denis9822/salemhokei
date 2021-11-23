@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="previous_page disabled"><a href="#"><i class="icon-left"></i></a></li>
            {{--<span>&laquo;</span>--}}
        @else
            <li class="previous_page"><a href="{{ $paginator->previousPageUrl() }}"><i class="icon-left"></i></a></li>
            {{--<a href="" rel="prev">&laquo;</a>--}}
        @endif

        {{-- Pagination Elements --}}
        {{--@foreach ($elements as $element)--}}
            {{-- "Three Dots" Separator --}}
            {{--@if (is_string($element))--}}
                {{--<li><a href="#">{{ $element }}</a></li>--}}
                {{--<li class="dots disabled"><a href="#">{{ $element }}</a></li>--}}
                {{--<a href="#">{{ $element }}</a>--}}
            {{--@endif--}}

            {{-- Array Of Links --}}
            {{--@if (is_array($element))--}}
                {{--@foreach ($element as $page => $url)--}}
                    {{--@if ($page == $paginator->currentPage())--}}
                        {{--<li class="active"><a href="#">{{ $page }}</a></li>--}}
                        {{--<span>{{ $page }}</span>--}}
                    {{--@else--}}
                        {{--<li><a href="{{ $url }}">{{ $page }}</a></li>--}}
                        {{--<a href="{{ $url }}">{{ $page }}</a>--}}
                    {{--@endif--}}
                {{--@endforeach--}}
            {{--@endif--}}
        {{--@endforeach--}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next_page"><a href="{{ $paginator->nextPageUrl() }}"><i class="icon-right"></i></a></li>
            {{--<a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>--}}
        @else
            <li class="next_page disabled"><a href="#"><i class="icon-right"></i></a></li>
            <span>&raquo;</span>
        @endif
    </ul>
@endif