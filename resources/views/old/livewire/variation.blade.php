<section>
    <div class="container">
        <div class="flex pt-7 border-b-2 border-gray-450 border-solid pb-16">
            @foreach($product->variations as $key => $variation)
                <div class="w-47/100 pr-5 image-wrapper {{ $variation->id == $activeVariation->id ? '' : 'hidden' }}">
                    <div class="rounded overflow-hidden">
                        <div>
                            <x-flickity wire:ignore class="w-full relative product-image-{{ $key }} focus:outline-none" data="slide: 1" options="{
                                        cellAlign: 'left',
                                        prevNextButtons: false,
                                        draggable: false,
                                        fade: true,
                                        pageDots: false,
                                    }" @variation-changed.window="
                                    flickity.destroy();
                                    flickity = new Flickity($el, {
                                        cellAlign: 'left',
                                        prevNextButtons: false,
                                        draggable: false,
                                        fade: true,
                                        pageDots: false,
                                    });">
                                <div class="slider-item absolute w-full h-auto">
                                    <img class="w-full h-auto"
                                         src="{{ '/storage/' . $variation->miniature }}"
                                         alt="">
                                </div>
                                @foreach($variation->media as $image)
                                    <div wire:key="{{ $image->id }}" class="slider-item absolute w-full h-auto">
                                        <img class="w-full h-auto"
                                             src="{{ '/storage/' . $image->src }}"
                                             alt="">
                                    </div>
                                @endforeach
                            </x-flickity>
                        </div>
                    </div>
                    <div class="pt-5">
                        <x-flickity wire:ignore class="nav-slider focus:outline-none" data="slide: 1" options="{
                                    cellAlign: 'left',
                                    asNavFor: '.product-image-{{ $key }}',
                                    prevNextButtons: false,
                                    contain: true,
                                    pageDots: false,
                                }" @variation-changed.window="
                                flickity.destroy();
                                flickity = new Flickity($el, {
                                    cellAlign: 'left',
                                    asNavFor: '.product-image-{{ $key }}',
                                    prevNextButtons: false,
                                    contain: true,
                                    pageDots: false,
                                });">
                            <div class="absolute nav-slider-item w-28 h-28 rounded overflow-hidden mr-3 border-2 border-solid-border-white">
                                <img class="w-full h-full"
                                     src="{{ '/storage/' . $variation->miniature }}"
                                     alt="">
                            </div>
                            @foreach($variation->media as $image)
                                <div wire:key="{{ $image->id }}" class="absolute nav-slider-item w-28 h-28 rounded overflow-hidden mr-3 border-2 border-solid-border-white">
                                    <img class="w-full h-full"
                                         src="{{ '/storage/' . $image->src }}"
                                         alt="">
                                </div>
                            @endforeach
                        </x-flickity>
                    </div>
                </div>
            @endforeach
            <div class="w-53/100 pl-5">
                <div class="flex border-b-2 border-gray-450 border-solid pb-6">
                    <div class="pr-5">
                        <span class="text-sm font-medium uppercase text-gray-520 mb-3">SKU: {{ $activeVariation->sku }}</span>
                        <h1 class="text-medium text-3xl text-gray-750 mb-2">
                            {{ $activeVariation->name() }}
                        </h1>
                        <div class="flex items-center mb-4">
                            <span class="text-4xl font-bold text-gray-750 mr-8">$ {{ $this->price }}</span>
                            @if($product->cashback)
                                <div class="bg-orange-450">
                                    <span class="text-white text-sm font-medium px-1">+{{ $product->cashback }}% cashback</span>
                                </div>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <div class="mr-6">
                                <svg class="w-9 h-auto" viewBox="0 0 36.702 24.518">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_52" data-name="Rectangle 52" width="36.702"
                                                  height="24.518" rx="5" transform="translate(751 1181)"
                                                  fill="#8b8b8b"/>
                                        </clipPath>
                                    </defs>
                                    <g id="Mask_Group_4" data-name="Mask Group 4" transform="translate(-751 -1181)"
                                       clip-path="url(#clip-path)">
                                        <g id="_411763" data-name="411763" transform="translate(751 1181.651)">
                                            <g id="Group_79" data-name="Group 79" transform="translate(0 0)">
                                                <g id="Group_78" data-name="Group 78">
                                                    <path id="Path_65" data-name="Path 65"
                                                          d="M34.133,54.669l-.95-3.8a.575.575,0,0,0,.455-.562v-.613a2.416,2.416,0,0,0-2.414-2.414H26.894V46.014a1.189,1.189,0,0,0-1.188-1.188H3.64a1.189,1.189,0,0,0-1.188,1.188V56.435a.575.575,0,1,0,1.149,0V46.014a.038.038,0,0,1,.038-.038H25.707a.038.038,0,0,1,.038.038V56.435a.575.575,0,0,0,1.149,0v-.651h6.782a1.881,1.881,0,0,1,1.786,1.3H33.675a.575.575,0,0,0-.575.575v1.226a1.8,1.8,0,0,0,1.8,1.8h.651v2.528h-1.5a3.638,3.638,0,0,0-6.879,0h-.277V58.887a.575.575,0,1,0-1.149,0v4.329H13.822a3.638,3.638,0,0,0-6.879,0H3.64a.038.038,0,0,1-.038-.038V61.913h2.49a.575.575,0,1,0,0-1.149H.575a.575.575,0,1,0,0,1.149H2.452v1.264A1.189,1.189,0,0,0,3.64,64.365h3.1c0,.013,0,.025,0,.038a3.64,3.64,0,0,0,7.279,0c0-.013,0-.026,0-.038H26.972c0,.013,0,.025,0,.038a3.64,3.64,0,0,0,7.279,0c0-.013,0-.026,0-.038h1.878a.575.575,0,0,0,.575-.575v-6.13A3.031,3.031,0,0,0,34.133,54.669Zm-7.238-6.241h4.329a1.266,1.266,0,0,1,1.264,1.264v.038H26.894Zm0,6.206V50.88H32l.939,3.754ZM10.382,66.894a2.49,2.49,0,1,1,2.49-2.49A2.493,2.493,0,0,1,10.382,66.894Zm20.228,0A2.49,2.49,0,1,1,33.1,64.4,2.493,2.493,0,0,1,30.61,66.894Zm4.942-7.356H34.9a.652.652,0,0,1-.651-.651v-.651h1.3v1.3Z"
                                                          transform="translate(0 -44.827)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                            <g id="Group_81" data-name="Group 81"
                                               transform="translate(9.195 18.389)">
                                                <g id="Group_80" data-name="Group 80">
                                                    <path id="Path_66" data-name="Path 66"
                                                          d="M62.315,167.082a1.188,1.188,0,1,0,1.188,1.188A1.189,1.189,0,0,0,62.315,167.082Z"
                                                          transform="translate(-61.127 -167.082)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                            <g id="Group_83" data-name="Group 83"
                                               transform="translate(29.423 18.389)">
                                                <g id="Group_82" data-name="Group 82">
                                                    <path id="Path_67" data-name="Path 67"
                                                          d="M196.8,167.082a1.188,1.188,0,1,0,1.188,1.188A1.189,1.189,0,0,0,196.8,167.082Z"
                                                          transform="translate(-195.608 -167.082)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                            <g id="Group_85" data-name="Group 85"
                                               transform="translate(14.711 15.937)">
                                                <g id="Group_84" data-name="Group 84">
                                                    <path id="Path_68" data-name="Path 68"
                                                          d="M106.96,150.781H98.378a.575.575,0,0,0,0,1.149h8.582a.575.575,0,1,0,0-1.149Z"
                                                          transform="translate(-97.804 -150.781)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                            <g id="Group_87" data-name="Group 87"
                                               transform="translate(1.226 13.486)">
                                                <g id="Group_86" data-name="Group 86">
                                                    <path id="Path_69" data-name="Path 69"
                                                          d="M16.081,134.48H8.725a.575.575,0,1,0,0,1.149h7.356a.575.575,0,1,0,0-1.149Z"
                                                          transform="translate(-8.15 -134.48)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                            <g id="Group_89" data-name="Group 89"
                                               transform="translate(10.421 5.517)">
                                                <g id="Group_88" data-name="Group 88">
                                                    <path id="Path_70" data-name="Path 70"
                                                          d="M78.841,81.671a.575.575,0,0,0-.813,0l-5.11,5.11-2.659-2.659a.575.575,0,0,0-.813.813L72.511,88a.575.575,0,0,0,.813,0l5.517-5.517A.575.575,0,0,0,78.841,81.671Z"
                                                          transform="translate(-69.278 -81.503)" fill="#8b8b8b"/>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <div class="flex items-center mb-1">
                                    <span class="font-medium text-gray-750 mr-2">Delivery:</span>
                                    <div class="border-b-2 border-gray-450 border-solid">
                                        <div class="date product-select-wrapper" wire:ignore>
                                            <x-select wire:model.debounce.200ms="state"
                                                      class="text-gray-750 font-medium">
                                                <option data-placeholder="true">Choose State</option>
                                                @foreach($stateOptions as $stateOption)
                                                    <option value="{{ $stateOption->id }}">{{ $stateOption->name }}</option>
                                                @endforeach
                                            </x-select>
                                        </div>
                                    </div>
                                </div>
                                @if($this->deliveryDate)
                                    <span class="text-sm font-medium text-gray-520">Get it by {{ $this->deliveryDate }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if($product->brand)
                        <div class="pl-5">
                            <div class="w-26">
                                <img class="w-full h-auto"
                                     src="{{ '/storage/' . $product->brand->logo }}"
                                     alt="{{ $product->brand->name }}">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="pt-5">
                    <div class="mb-6">
                        @foreach($product->specifications as $specification)
                            <div class="font-medium flex items-center">
                                <h6 class="text-gray-750 w-19/100 leading-relaxed">{{ $specification->label }}:</h6>
                                <span class="text-gray-450">{{ $specification->value }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-center pt-1 pb-6">
                        <label for="sizes" class="text-lg font-bold text-gray-750 w-12/100">Color:</label>
                        <div class="border-b-2 border-gray-450 border-solid">
                            <div class="date product-select-wrapper" wire:ignore>
                                <x-select wire:model.debounce.200ms="color"
                                          class="text-gray-750 font-medium">
                                    <option data-placeholder="true">Please, Choose Color</option>
                                    @foreach($product->variations as $variation)
                                        <option value="{{ $variation->id }}">{{ $variation->color }}</option>
                                    @endforeach
                                </x-select>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mb-6">
                        <label for="sizes" class="text-lg font-bold text-gray-750 w-12/100">Qty:</label>
                        <div class="flex border-b-2 border-gray-450 border-solid counter-wrap">
                            <button class="text-2xl font-medium text-gray-750"
                                    wire:click="increaseQuantity()">+</button>
                            <input wire:model.debounce.200ms="quantity"
                                   type="number"
                                   min="0"
                                   max="{{ $this->maxQuantity }}"
                                   class="w-full text-gray-750 font-bold text-lg text-center focus::border-0 border-0"
                                   placeholder="1">
                            <button class="text-2xl font-medium text-gray-750"
                                    wire:click="decreaseQuantity">-</button>
                        </div>
                    </div>
                    <div class="pt-1 mb-24">
                        @if($activeVariation->variationItems->count())
                            <span class="text-lg font-bold text-gray-750 mb-4">Select Size</span>
                            <div class="flex items-center">
                                @foreach($activeVariation->variationItems as $variationItem)
                                    <button wire:click="setVariationItem({{ $variationItem->id }})"
                                            class="mr-3 bg-gray-200 leading-tight px-3 py-2 text-base font-medium text-gray-520 border-2 border-solid border-gray-200 sizes-buttons {{ $activeVariationItem && $activeVariationItem->id === $variationItem->id ? 'active' : '' }}">
                                        {{ $variationItem->size }}
                                    </button>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="flex items-center">
                        @if($quantity)
                            <div>
                                @if(!$this->inBasket($activeVariation, $activeVariationItem))
                                    <button wire:click="addToCart" class="leading-tight py-4 px-19 mr-2 text-lg font-semibold text-white border border-gray-750 bg-gray-750">
                                        Add to cart
                                    </button>
                                @else
                                    <a href="/basket" class="leading-tight py-3 px-19 mr-2 text-lg font-semibold text-white border border-orange-450 bg-orange-450">
                                        Go to cart
                                    </a>
                                @endif
                            </div>
                        @endif
                        @if(!$this->inFavorites($activeVariation, $activeVariationItem))
                            <button wire:click="addToWishlist" class="leading-tight py-4 px-19 mr-2 text-lg font-semibold text-gray-750 border border-white underline">
                                Add to Wish List
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
