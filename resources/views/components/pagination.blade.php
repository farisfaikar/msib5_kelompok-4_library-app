@if ($paginator->hasPages())
  <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex flex-col items-center mt-4">
    <span class="text-sm text-base-content">
      {!! __('Showing') !!}
      @if ($paginator->firstItem())
        <span class="font-semibold text-base">{{ $paginator->firstItem() }}</span>
        {!! __('to') !!}
        <span class="font-semibold text-base">{{ $paginator->lastItem() }}</span>
      @else
        {{ $paginator->count() }}
      @endif
      {!! __('of') !!}
      <span class="font-semibold text-base">{{ $paginator->total() }}</span>
      {!! __('Entries') !!}
    </span>

    <div class="inline-flex mt-2 xs:mt-0">
      <div class="join">
        {{-- First Page Link --}}
        @if ($paginator->onFirstPage())
          <button aria-disabled="true" aria-label="{{ __('pagination.first') }}" class="join-item btn btn-ghost btn-disabled">
            ≪
          </button>
        @else
          <a href="{{ $paginator->url(1) }}" rel="first" class="join-item btn btn-ghost" aria-label="{{ __('pagination.first') }}">
            ≪
          </a>
        @endif

        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
          <button aria-disabled="true" aria-label="{{ __('pagination.previous') }}" class="join-item btn btn-ghost btn-disabled">
            <
          </button>
        @else
          <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="join-item btn btn-ghost" aria-label="{{ __('pagination.previous') }}">
            <
          </a>
        @endif

        {{-- Current Page Number --}}
        <button aria-current="page" class="join-item btn btn-ghost hover:cursor-default hover:bg-inherit no-animation">
          Page {{ $paginator->currentPage() }}
        </button>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
          <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="{{ __('pagination.next') }}" class="join-item btn btn-ghost">
            >
          </a>
        @else
          <button aria-disabled="true" aria-label="{{ __('pagination.next') }}" class="join-item btn btn-ghost btn-disabled">
            >
          </button>
        @endif

        {{-- Last Page Link --}}
        @if ($paginator->hasMorePages())
          <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="last" aria-label="{{ __('pagination.last') }}" class="join-item btn btn-ghost">
            ≫
          </a>
        @else
          <button aria-disabled="true" aria-label="{{ __('pagination.last') }}" class="join-item btn btn-ghost btn-disabled">
            ≫
          </button>
        @endif
      </div>
    </div>
  </nav>
@endif
