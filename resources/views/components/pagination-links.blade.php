@if ($paginator->hasPages())
    <ul role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="cursor-not-allowed inline-block px-2" aria-disabled="true" aria-label="Previous">
                <span aria-hidden="true" class="block mr-1 outline-none focus:outline-none">
                    <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                         xml:space="preserve">
                        <path class="fill-current text-gray-350" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                    </svg>
                </span>
            </li>
        @else
            <li class="inline-block px-2">
                <button class="focus:outline-none" type="button" wire:click="previousPage" rel="prev"
                        aria-label="Previous">
                    <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                         xml:space="preserve">
                        <path class="fill-current text-gray-700" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                    </svg>
                </button>
            </li>
        @endif

        {{-- Pagination elements --}}
        <li class="inline-block" aria-current="page">
            <span>{{ $paginator->currentPage() }}</span>
            <span class="text-gray-350">/</span>
            <span class="text-gray-350">{{$paginator->lastPage()}}</span>
        </li>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="inline-block px-2">
                <button class="focus:outline-none transform rotate-180" type="button" wire:click="nextPage" rel="next"
                        aria-label="Next">
                    <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                         xml:space="preserve">
                        <path class="fill-current text-gray-700" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                    </svg>
                </button>
            </li>
        @else
            <li class="cursor-not-allowed inline-block px-2" aria-disabled="true" aria-label="Next">
                <span aria-hidden="true" class="focus:outline-none">
                    <div class="transform rotate-180">
                        <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                             xml:space="preserve">
                            <path class="fill-current text-gray-350" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                                c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                                L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                                c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                                c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                                C492,219.198,479.172,207.418,464.344,207.418z"/>
                        </svg>
                    </div>
                </span>
            </li>
        @endif
    </ul>
@endif
