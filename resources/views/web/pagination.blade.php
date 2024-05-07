{{-- @if($paginator->count())
<div aria-live="polite" role="status" class="dataTables_info">
    {{
    trans_choice(__('Showing :count from total :total entry|Showing :count from total :total entries',
        ['count' =>  $paginator->count(),
        'total' => $paginator->total()]
    ), $paginator->total()) }}
</div>
@endif --}}
@if ($paginator->hasPages())
    <div class="pagination justify-content-end mt-2 mb-5">
        <!-- Previous Page Link -->
        @if ($paginator->onFirstPage())
        <li class="news-page-item"><a class="news-page-link previous disabled" href="#">&lsaquo;</a></li>
        @else
        <li class="news-page-item"> <a class="news-page-link previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lsaquo;</a></li>
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
            @if (is_string($element))
            <li class="news-page-item"><a class="news-page-link disabled"><i class="zmdi zmdi-more-horiz"></i></a></li>
            @endif

            <!-- Array Of Links -->
            @if (is_array($element))
                <span>
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="news-page-item  news-active"><a href="" class="news-page-link current">{{ $page }}</a></li>
                    @else
                    <li class="news-page-item"><a class="news-page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
                </span>
            @endif
        @endforeach

        <!-- Next Page Link -->
        @if ($paginator->hasMorePages())
        <li class="news-page-item"><a class="news-page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a></li>
        @else
        <li class="news-page-item"> <a class="news-page-link next disabled" href="#">&rsaquo;</a></li>
        @endif

    </div>
@endif
