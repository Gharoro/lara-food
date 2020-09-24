@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="border border-teal-500 text-teal-500 block rounded-sm font-bold py-2 px-2 mr-2 flex items-center">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="border border-teal-500 text-teal-500 block rounded-sm font-bold py-2 px-2 mr-2 flex items-center">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="border border-teal-500 bg-teal-500 text-white block rounded-sm font-bold py-2 px-2 ml-2 flex items-center">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="border border-teal-500 bg-teal-500 text-white block rounded-sm font-bold py-2 px-2 ml-2 flex items-center">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
