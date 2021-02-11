<div>
    <div id="basket">
        <div class="container sm:px-0">
            <div class="breadcrumbs py-6 mb-10 border-b-2 border-gray-450 xsm:hidden sm:mx-5">
                <div class="flex items-center font-medium text-sm">
                    <a href="/" class="text-gray-540 font-medium text-sm mr-4">Home</a>
                    <span class="mr-4">
                       <svg class="w-2 h-2 fill-current text-gray-540" width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                            xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                        </svg>
                    </span>
                    <span class="text-gray-750 font-medium text-sm">My shopping bag</span>
                </div>
            </div>
            <div class="w-11/12 l:w-full m-auto mb-20 2xs:mb-10 flex sm:flex-col">
                <div class="w-9/12 l:w-7/12 sm:w-full mr-5">
                    <div class="relative px-8 py-5 rounded-lg border-2 border-gray-450 mb-12 sm:px-5 sm:rounded-none sm:border-l-0 sm:border-r-0">
                        <div class="title absolute">
                            <h1 class="bg-white px-3 text-3xl sm:text-2xl text-gray-750">My shopping bag</h1>
                        </div>
                        <div class="flex py-3 bg-gray-450 my-8 l:hidden">
                            <p class="text-base text-gray-750 font-medium w-2/12 pl-3">Product</p>
                            <div class="w-10/12 flex">
                                <div class="w-5/12"></div>
                                <p class="w-2/12 text-center">Price</p>
                                <p class="w-3/12 text-center">Quantity</p>
                                <p class="w-2/12 pr-3 text-center">Total</p>
                            </div>
                        </div>
                        <div class="basket-product l:pt-8">
                            @foreach($variations as $variation)
                                <div class="product-card flex l:flex-col  w-full pb-7 mb-7 2xs:pb-0 2xs:mb-0">
                                    <div class="flex w-full l:mb-5">
                                        <div class="w-2/12 l:w-4/12">
                                            <img src="{{ '/storage/' . $variation['miniature'] }}"
                                                 alt="{{ $this->variationName($variation) }}">
                                        </div>
                                        <div class="w-10/12 l:w-8/12">
                                            <div class="w-full flex">
                                                <div class="pr-4 mb-9 w-5/12 l:w-full pl-5">
                                                    <p class="text-sm font-semibold">{{ $variation['product']['name'] }}</p>
                                                    <p class="text-sm font-medium text-gray-520 hidden l:block">Price: ${{ $this->price($variation) }}</p>
                                                    <p class="text-sm font-medium text-gray-520">Color: {{ $variation['color'] }}</p>
                                                    @if($variation['variationItem'])
                                                        <p class="text-sm font-medium text-gray-520">Size: {{ $variation['variationItem']['size'] }}</p>
                                                    @endif
                                                    <div class="hidden l:flex l:pt-5">
                                                        <button wire:click="increaseQuantity({{ $loop->index }})" class="px-3 focus:outline-none">
                                                            <svg class="w-3 h-3 fill-current text-gray-750" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"/>
                                                            </svg>
                                                        </button>
                                                        <p class="border-l border-r border-gray-520 text-lg font-bold px-3">{{ $variation['quantity'] }}</p>
                                                        <button wire:click="decreaseQuantity({{ $loop->index }})" class="px-3 focus:outline-none">
                                                            <svg class="w-3 h-3 fill-current text-gray-750" viewBox="0 0 409.6 409.6" style="enable-background:new 0 0 409.6 409.6;" xml:space="preserve">
                                                                <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467
                                                                c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="w-2/12 l:hidden">
                                                    <p class="text-base font-bold text-center">${{ $this->price($variation) }}</p>
                                                </div>
                                                <div class="w-3/12 l:hidden">
                                                    <div class="flex justify-center">
                                                        <button wire:click="increaseQuantity({{ $loop->index }})" class="px-3 focus:outline-none">
                                                            <svg class="w-3 h-3 fill-current text-gray-750" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                <path d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216
                                                                    v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"/>
                                                            </svg>
                                                        </button>
                                                        <p class="border-l border-r border-gray-520 text-lg font-bold px-3">{{ $variation['quantity'] }}</p>
                                                        <button wire:click="decreaseQuantity({{ $loop->index }})" class="px-3 focus:outline-none">
                                                            <svg class="w-3 h-3 fill-current text-gray-750" viewBox="0 0 409.6 409.6" style="enable-background:new 0 0 409.6 409.6;" xml:space="preserve">
                                                            <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467
                                                            c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z"/>
                                                        </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="w-2/12 l:hidden">
                                                    <p class="text-xl font-bold text-rig ht pr-3">${{ $this->price($variation) * $variation['quantity'] }}</p>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap pl-5 l:hidden">
                                                @if(!$this->inFavorites($variation, $variation['variationItem']))
                                                    <button wire:click="addToWishlist({{ $loop->index }})" class="text-sm font-semibold text-gray-750 px-8 py-2 border-2 border-gray-450 mr-5 focus:outline-none">Save for later</button>
                                                @endif
                                                <button wire:click="deleteFromCart({{ $loop->index }})" class="text-gray-520 font-semibold text-sm focus:outline-none">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden l:flex justify-between 2xs:flex-col-reverse">
                                        <div class="flex flex-wrap 2xs:flex-col">
                                            <button class="text-sm font-semibold text-gray-750 px-8 sm:px-16 py-2 border-2 border-gray-450 mr-5 2xs:mr-0 2xs:mb-5 focus:outline-none">Save for later</button>
                                            <button wire:click="deleteFromBasket({{ $loop->index }})" class="text-gray-520 font-semibold text-sm focus:outline-none">Delete</button>
                                        </div>
                                        <div class="hidden l:flex flex-col 2xs:flex-row 2xs:items-center 2xs:justify-between 2xs:mb-5">
                                            <p class="text-sm font-medium text-gray-520">Total</p>
                                            <p class="text-xl font-bold text-right pr-3">${{ $this->price($variation) * $variation['quantity'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-4/12 l:w-5/12 sm:w-full">
                    <div class="px-8 2xs:px-5 pt-12 pb-5 sm:py-5 rounded-lg border-2 border-gray-450 sm:border-0 sm:rounded-none sm:bg-gray-50 relative sm:flex 3xs:flex-col">
                        <div class="title absolute sm:hidden">
                            <h2 class="bg-white px-3 text-3xl text-gray-750">Total</h2>
                        </div>
                        <div class="sm:w-1/2 3xs:w-full sm:pr-10 2xs:pr-5 3xs:pr-0 sm:flex sm:flex-col sm:justify-center 3xs:mb-5">
                            <div class="flex items-center justify-between sm:justify-end 3xs:justify-between mb-5 sm:mb-0 w-full">
                                <p class="text-gray-520 font-medium text-base sm:text-sm mr-4">Sub-total <span class="hidden sm:inline">:</span></p>
                                <p class="text-gray750 font-medium sm:font-bold text-3xl sm:text-2xl">${{ $this->totalPrice }}</p>
                            </div>
                            <div class="items-center sm:justify-end 3xs:justify-between w-full hidden sm:flex">
                                <p class="text-gray-520 font-medium text-sm mr-4">Est. tax:</p>
                                <p class="text-gray-520 font-medium text-sm">$5.15</p>
                            </div>
                        </div>
                        <div class="sm:w-1/2 3xs:w-full">
                            @if(count($variations))
                                <a href="/checkout"
                                   class="inline-block text-center text-lg font-medium text-white w-full bg-green-550 py-4 mb-6 focus:outline-none">Go to Checkout</a>
                                <p class="text-sm font-medium text-gray-520">
                                    <span>Got a discount code?</span>
                                    <span>Add it in the next step.</span>
                                </p>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
