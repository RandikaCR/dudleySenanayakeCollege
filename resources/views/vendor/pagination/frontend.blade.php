@if ($paginator->hasPages())
    <div class="pagination-wrapper">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a href="#" class="page-link"><i class="flaticon-right-arrow-1"></i></a>
                </li>
            @else
                <li class="">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-link" aria-label="@lang('pagination.previous')"><i class="flaticon-right-arrow-1"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class=" disabled">
                        <a href="javascript:void(0);" class="">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="" aria-current="page">
                                <a href="javascript:void(0);" class="current">{{ $page }}</a>
                            </li>
                        @else
                            <li class="">
                                <a href="{{ $url }}" class="">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="">
                    <a href="{{ $paginator->nextPageUrl() }}" class="" rel="next" aria-label="@lang('pagination.next')"><i class="flaticon-right-arrow-1"></i></a>
                </li>
            @else
                <li class="disabled">
                    <a href="javascript:void(0);" class="" aria-disabled="true" aria-label="@lang('pagination.next')"><i class="flaticon-right-arrow-1"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif

