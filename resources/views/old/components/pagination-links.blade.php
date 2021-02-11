@if ($paginator->hasPages())
    <ul role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="cursor-not-allowed inline-block px-2" aria-disabled="true" aria-label="Previous">
                <span aria-hidden="true">
                    <span>Previous</span>
                </span>
            </li>
        @else
            <li class="inline-block px-2">
                <button class="focus:outline-none" type="button" wire:click="previousPage" rel="prev" aria-label="Previous">
                    <span>Previous</span>
                </button>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="cursor-not-allowed inline-block px-1" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="inline-block px-1 text-orange-450" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li class="inline-block px-1">
                            <button class="focus:outline-none" type="button" wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="inline-block px-2">
                <button class="focus:outline-none" type="button" wire:click="nextPage" rel="next" aria-label="Next">
                    <span>Next</span>
                </button>
            </li>
        @else
            <li class="cursor-not-allowed inline-block px-2" aria-disabled="true" aria-label="Next">
                <span aria-hidden="true">
                    <span>Next</span>
                </span>
            </li>
        @endif
    </ul>
@endif
