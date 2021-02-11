<div>
    <div class="title absolute flex bg-white">
        <h2 class="px-3 text-3xl text-gray-750">My wishlist</h2>
        <p class="flex items-center pr-3 text-sm font-medium text-gray-450">{{ count($favorites) }} item</p>
    </div>
    <div class="product-block pt-10 w-full flex flex-wrap mb-7 sm:px-5 sm:mb-0">
        @foreach($favorites as $favorite)
            <div class="product-card carousel-cell w-1/3 lg:w-1/2 md:w-1/3 xs:w-1/2 s:w-full pr-5 mb-10">
                <img src="{{ '/storage/' . $favorite['variation']['miniature'] }}"
                     alt="{{ $favorite['variation']['product']['name'] }}"
                     class="mb-4 object-cover w-full h-auto">
                <p class="text-sm font-semibold text-gray-750 mb-3 h-10 overflow-hidden">
                    {{ $this->variationName($favorite) }}
                </p>
                <p class="text-gray-750 mb-4 font-bold text-xl">${{ $this->price($favorite) }}</p>
                <div class="flex justify-between xxl:flex-col xs:flex-row 2sm:flex-col">
                    @if(!$this->inBasket($favorite['variation'], $favorite['variation_item']))
                        <button wire:click="addToCart({{ $loop->index }})" class="bg-gray-750 px-8 py-2 text-white text-base font-semibold xxl:px-0 xxl:mb-3 xs:w-8/12 2sm:w-full xs:mb-0 2sm:mb-3">
                            Add to cart
                        </button>
                    @else
                        <a href="/basket" class="px-8 py-2 text-white text-center text-base font-semibold bg-orange-450 xxl:px-0 xxl:mb-3 xs:w-8/12 xs:mb-0 2sm:w-full 2sm:mb-3">
                            Go to cart
                        </a>
                    @endif
                    <button wire:click="deleteFromFavorites({{ $loop->index }})" class="text-gray-750 px-3 text-base font-semibold">Delete</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
