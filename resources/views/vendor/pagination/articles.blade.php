@if ($paginator->hasPages())
    <div class="n-card-controls controls">
        @if ($paginator->onFirstPage())
            <a href="#"><i class="icon-left2 disabled"></i></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"><i class="icon-left2"></i></a>
        @endif

        @if ($paginator->hasMorePages() && ($count == 12))
            <a href="{{ $paginator->nextPageUrl() }}"><i class="icon-right2"></i></a>
        @else
            <a href="#"><i class="icon-right2 disabled"></i></a>
        @endif
    </div>
@endif
