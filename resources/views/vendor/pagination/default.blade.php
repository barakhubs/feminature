{{-- resources/views/vendor/pagination/simple.blade.php --}}

@if ($paginator->hasPages())
    <nav class="pagination-simple">
        <ul class="pagination-list">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination-item disabled">
                    <span>&laquo; Previous</span>
                </li>
            @else
                <li class="pagination-item">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                </li>
            @endif

            {{-- Page Number Display --}}
            <li class="pagination-info">
                <span>Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}</span>
            </li>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination-item">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a>
                </li>
            @else
                <li class="pagination-item disabled">
                    <span>Next &raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
