<div>
    <section class="container py-10 flex items-center justify-between">
        <div class="w-1/4 breadcrumb text-gray-520 text-sm font-medium">
            <a href="/">Home</a>
            @foreach($parentCategories as $aCategory)
                <a href="{{$aCategory['slug']}}" class="{{ !$loop->last ?: 'text-gray-750' }}">{{ $aCategory['name'] }}</a>
            @endforeach
        </div>
        <div class="flex-auto">
            <h1 class="text-4xl text-gray-850 font-black uppercase text-center whitespace-no-wrap transition-all duration-300 {{ $this->withoutSidebar ? 'w-full' : 'w-0' }} ">{{ $activeCategory->name }}</h1>
        </div>
        <div class="w-1/4 text-right">
            <span class="font-medium text-gray-520">{{ $variations->total() }} Items</span>
        </div>
    </section>
    <section id="variations" class="container">
        <div class="flex justify-end">
            <div class="categories-sidebar w-1/4 flex-shrink-0 {{ $this->withoutSidebar ? 'opacity-0' : 'opacity-100' }}">
                @foreach($categories as $category)
                    <x-categories-tree-main :category="$category" :parent-categories="$parentCategories"/>
                @endforeach
            </div>
            <div class="flex-shrink-0 transition-all duration-300 {{ $this->withoutSidebar ? 'w-full' : 'w-3/4' }}">
                <div class="border-t-2 border-b-2 border-gray-50 transition-all duration-300">
                    <div class="flex justify-between items-center">
                        <div class="flex">
                            <div class="relative mr-16" x-data="{ show: false }">
                                <div class="filter-label border-t-2 border-transparent pt-6 pb-5 text-gray-750 font-medium flex items-center cursor-pointer"
                                     :class="{'border-orange-450': show}"
                                     @click="show = !show">
                                    <span class="mr-2">Sort: {{ $sortOptions[array_search($sort, array_column($sortOptions, 'value'))]['label'] }}</span>
                                    <span>
                                        <svg width="7.612" height="9.15" viewBox="0 0 7.612 9.15">
                                          <g transform="translate(7.612) rotate(90)">
                                            <g>
                                              <path d="M9,44.8l-3.3-3.3a.5.5,0,0,0-.708,0l-.3.3a.5.5,0,0,0-.146.354.507.507,0,0,0,.146.358l1.928,1.932H.494A.489.489,0,0,0,0,44.929v.424a.507.507,0,0,0,.494.514H6.641L4.691,47.81a.5.5,0,0,0,0,.7l.3.3a.5.5,0,0,0,.708,0l3.3-3.3A.505.505,0,0,0,9,44.8Z" transform="translate(0 -41.346)"/>
                                            </g>
                                          </g>
                                        </svg>
                                    </span>
                                </div>
                                <div x-show.transition="show"
                                     class="absolute w-60 pt-5 pb-3 px-3 bg-gray-75 rounded shadow {{ $this->withoutSidebar ? 'dropdown__without-sidebar' : 'filter-dropdown' }}" @click.away="show = false">
                                    <ul class="font-medium">
                                        @foreach($sortOptions as $option)
                                            <li class="w-full text-center py-2 rounded mb-2 cursor-pointer {{ $sort === $option['value'] ? 'text-white bg-orange-450' : 'text-gray-675 bg-gray-375' }}"
                                                wire:click="selectSort('{{ $option['value'] }}')">{{ $option['label'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="relative mr-16" x-data="{ show: false }">
                                <div class="filter-label border-t-2 border-transparent pt-6 pb-5 text-gray-750 font-medium flex items-center cursor-pointer"
                                     :class="{'border-orange-450': show}"
                                     @click="show = !show">
                                    <span class="mr-2">Brand: {{ !count($selectedBrands) ? 'All' : '('. count($selectedBrands) .')' }}</span>
                                    <span>
                                        <svg width="7.612" height="9.15" viewBox="0 0 7.612 9.15">
                                          <g transform="translate(7.612) rotate(90)">
                                            <g>
                                              <path d="M9,44.8l-3.3-3.3a.5.5,0,0,0-.708,0l-.3.3a.5.5,0,0,0-.146.354.507.507,0,0,0,.146.358l1.928,1.932H.494A.489.489,0,0,0,0,44.929v.424a.507.507,0,0,0,.494.514H6.641L4.691,47.81a.5.5,0,0,0,0,.7l.3.3a.5.5,0,0,0,.708,0l3.3-3.3A.505.505,0,0,0,9,44.8Z" transform="translate(0 -41.346)"/>
                                            </g>
                                          </g>
                                        </svg>
                                    </span>
                                </div>
                                <div x-show.transition="show"
                                     class="absolute w-60 pt-5 pb-3 px-3 bg-gray-75 rounded shadow {{ $this->withoutSidebar ? 'dropdown__without-sidebar' : 'filter-dropdown' }}" @click.away="show = false">
                                    <ul class="font-medium">
                                        <div class="flex items-center justify-between mb-4">
                                            <span class="text-gray-675">{{ count($selectedBrands) }} selected</span>
                                            <button class="focus:outline-none px-2 py-1 rounded font-medium {{ !count($selectedBrands) ? 'text-white bg-orange-450' : 'text-gray-675 bg-gray-375' }}"
                                                    wire:click="setAllBrands">All brands</button>
                                        </div>
                                        @foreach($brandOptions as $brand)
                                            <li class="w-full text-center py-2 rounded mb-2 cursor-pointer {{ in_array($brand['id'], $selectedBrands) ? 'text-white bg-orange-450' : 'text-gray-675 bg-gray-375' }}"
                                                wire:click="toggleBrand('{{ $brand['id'] }}')">{{ $brand['name'] }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="relative mr-16" x-data="{ show: false }">
                                <div class="filter-label border-t-2 border-transparent pt-6 pb-5 text-gray-750 font-medium flex items-center cursor-pointer"
                                     :class="{'border-orange-450': show}"
                                     @click="show = !show">
                                    <span class="mr-2">Color: {{ !count($selectedColors) ? 'All' : '('. count($selectedColors) .')' }}</span>
                                    <span>
                                        <svg width="7.612" height="9.15" viewBox="0 0 7.612 9.15">
                                          <g transform="translate(7.612) rotate(90)">
                                            <g>
                                              <path d="M9,44.8l-3.3-3.3a.5.5,0,0,0-.708,0l-.3.3a.5.5,0,0,0-.146.354.507.507,0,0,0,.146.358l1.928,1.932H.494A.489.489,0,0,0,0,44.929v.424a.507.507,0,0,0,.494.514H6.641L4.691,47.81a.5.5,0,0,0,0,.7l.3.3a.5.5,0,0,0,.708,0l3.3-3.3A.505.505,0,0,0,9,44.8Z" transform="translate(0 -41.346)"/>
                                            </g>
                                          </g>
                                        </svg>
                                    </span>
                                </div>
                                <div x-show.transition="show"
                                     class="absolute w-60 pt-5 pb-3 px-3 bg-gray-75 rounded shadow {{ $this->withoutSidebar ? 'dropdown__without-sidebar' : 'filter-dropdown' }}" @click.away="show = false">
                                    <ul class="font-medium">
                                        <div class="flex items-center justify-between mb-4">
                                            <span class="text-gray-675">{{ count($selectedColors) }} selected</span>
                                            <button class="focus:outline-none px-2 py-1 rounded font-medium {{ !count($selectedColors) ? 'text-white bg-orange-450' : 'text-gray-675 bg-gray-375' }}"
                                                    wire:click="setAllColors">All colors</button>
                                        </div>
                                        @foreach($colorOptions as $color)
                                            <li class="w-full text-center py-2 rounded mb-2 cursor-pointer {{ in_array($color, $selectedColors) ? 'text-white bg-orange-450' : 'text-gray-675 bg-gray-375' }}"
                                                wire:click="toggleColor('{{ $color }}')">{{ $color }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="relative mr-16" x-data="{ show: false }">
                                <div class="filter-label border-t-2 border-transparent pt-6 pb-5 text-gray-750 font-medium flex items-center cursor-pointer"
                                     :class="{'border-orange-450': show}"
                                     @click="show = !show">
                                    <span class="mr-2">
                                        Price: {{ $generalMinPrice === $minPrice && $generalMaxPrice === $maxPrice ? 'All' : '($'. $minPrice . ' - $' . $maxPrice .')' }}
                                    </span>
                                    <span>
                                        <svg width="7.612" height="9.15" viewBox="0 0 7.612 9.15">
                                          <g transform="translate(7.612) rotate(90)">
                                            <g>
                                              <path d="M9,44.8l-3.3-3.3a.5.5,0,0,0-.708,0l-.3.3a.5.5,0,0,0-.146.354.507.507,0,0,0,.146.358l1.928,1.932H.494A.489.489,0,0,0,0,44.929v.424a.507.507,0,0,0,.494.514H6.641L4.691,47.81a.5.5,0,0,0,0,.7l.3.3a.5.5,0,0,0,.708,0l3.3-3.3A.505.505,0,0,0,9,44.8Z" transform="translate(0 -41.346)"/>
                                            </g>
                                          </g>
                                        </svg>
                                    </span>
                                </div>
                                <div x-show.transition="show"
                                     class="absolute w-96 pt-5 pb-5 px-3 bg-gray-75 rounded shadow {{ $this->withoutSidebar ? 'dropdown__without-sidebar' : 'price-dropdown' }}"
                                     @click.away="show = false">
                                    <p class="text-gray-520 font-medium text-sm mb-5">Selected price range:
                                        <span class="text-gray-750"> {{'$ ' . $minPrice . ' - $ ' . $maxPrice}}</span>
                                    </p>
                                    <div class="flex justify-between text-gray-520 text-sm font-medium mb-1">
                                        <p>$ {{$generalMinPrice}}</p>
                                        <p>$ {{$generalMaxPrice}}</p>
                                    </div>
                                    <div class="multi-range-slider relative mb-6" x-data="priceRange()" x-init="init()">
                                        <input type="range" x-ref="minInput" min="{{$generalMinPrice}}" max="{{$generalMaxPrice}}" step="0.05" value="{{$minPrice}}"
                                               wire:model.debounce.500ms="minPrice" x-on:input="setMinPrice">
                                        <input type="range" x-ref="maxInput" min="{{$generalMinPrice}}" max="{{$generalMaxPrice}}" step="0.05" value="{{$maxPrice}}"
                                               wire:model.debounce.500ms="maxPrice" x-on:input="setMaxPrice">

                                        <div class="slider relative z-10 h-1 mx-1">
                                            <div class="absolute z-10 left-0 right-0 top-0 bottom-0 rounded-sm bg-gray-375" wire:ignore></div>
                                            <div x-ref="range" class="absolute z-20 left-0 right-0 top-0 bottom-0 rounded-sm bg-orange-450" wire:ignore></div>
                                            <div x-ref="thumbMin" class="thumb left relative">
                                                <div class="thumb-icon" wire:ignore></div>
                                                <p class="price-tag absolute w-12 text-center text-gray-520 font-medium text-xs whitespace-no-wrap">$ {{$minPrice}}</p>
                                            </div>
                                            <div x-ref="thumbMax" class="thumb right relative">
                                                <div class="thumb-icon" wire:ignore></div>
                                                <p class="price-tag absolute w-12 text-center text-gray-520 font-medium text-xs whitespace-no-wrap">$ {{$maxPrice}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button wire:click="changeView('without-sidebar')" class="mr-1 focus:outline-none {{ $this->withoutSidebar ? 'text-orange-450' : 'text-gray-520' }}">
                                <svg class="fill-current" width="20.696" height="21" viewBox="0 0 20.696 21">
                                    <g transform="translate(8.388)">
                                        <g transform="translate(-8.388)">
                                            <g transform="translate(0)">
                                                <path d="M8.09,0H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09A.609.609,0,0,0,8.7,5.478V.609A.609.609,0,0,0,8.09,0Z" transform="translate(-2.612)"/>
                                                <path d="M133.478,0h-4.87A.609.609,0,0,0,128,.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V.609A.609.609,0,0,0,133.478,0Z" transform="translate(-120.696)"/>
                                                <path d="M8.09,125.388H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,8.09,125.388Z" transform="translate(-2.612 -118.084)"/>
                                                <path d="M133.478,125.388h-4.87A.609.609,0,0,0,128,126v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,133.478,125.388Z" transform="translate(-120.696 -118.084)"/>
                                                <path d="M258.866,0H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V.609A.609.609,0,0,0,258.866,0Z" transform="translate(-238.779)"/>
                                                <path d="M258.866,125.388H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,258.866,125.388Z" transform="translate(-238.779 -118.084)"/>
                                                <path d="M8.09,256H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,8.09,256Z" transform="translate(-2.612 -241.087)"/>
                                                <path d="M133.478,256h-4.87a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,133.478,256Z" transform="translate(-120.696 -241.087)"/>
                                                <path d="M258.866,256H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,258.866,256Z" transform="translate(-238.779 -241.087)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <button wire:click="changeView('with-sidebar')" class="focus:outline-none {{ $this->withSidebar ? 'text-orange-450' : 'text-gray-520' }}">
                                <svg class="fill-current" width="20.738" height="20.738" viewBox="0 0 20.738 20.738">
                                    <g>
                                        <g>
                                            <path d="M8.774,0H.8A.8.8,0,0,0,0,.8V8.774a.8.8,0,0,0,.8.8H8.774a.8.8,0,0,0,.8-.8V.8A.8.8,0,0,0,8.774,0Z"/>
                                            <path d="M155.059,0h-7.976a.8.8,0,0,0-.8.8V8.774a.8.8,0,0,0,.8.8h7.976a.8.8,0,0,0,.8-.8V.8A.8.8,0,0,0,155.059,0Z" transform="translate(-135.118 0)"/>
                                            <path d="M8.774,146.286H.8a.8.8,0,0,0-.8.8v7.976a.8.8,0,0,0,.8.8H8.774a.8.8,0,0,0,.8-.8v-7.976A.8.8,0,0,0,8.774,146.286Z" transform="translate(0 -135.119)"/>
                                            <path d="M155.059,146.286h-7.976a.8.8,0,0,0-.8.8v7.976a.8.8,0,0,0,.8.8h7.976a.8.8,0,0,0,.8-.8v-7.976A.8.8,0,0,0,155.059,146.286Z" transform="translate(-135.118 -135.119)"/>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pb-12 {{ $this->withoutSidebar ? 'pt-12' : 'pt-6' }}">
                    <div class="flex flex-wrap transition-all duration-300 {{ $this->withoutSidebar ? '-mx-7 xl:-mx-5' : '-mx-4 xl:-mx-3' }}">
                        @foreach($variations as $variation)
                            <a href="/products/{{ $variation->product->slug }}/{{ $variation->sku }}"
                               class="block mb-10 transition-all duration-300 {{ $this->withoutSidebar ? 'w-1/5 px-7 xl:px-5' : 'w-1/4 px-4 xl:px-3' }}">
                                <div class="w-full h-88 xl:h-80 flex items-center mb-6">
                                    <img class="w-full h-full object-contain"
                                         src="{{ '/storage/' . $variation->miniature }}"
                                         alt="{{ $variation->name() }}">
                                </div>
                                <h4 class="text-sm font-semibold text-gray-750 mb-2">{{ $variation->name() }}</h4>
                                <span class="text-xl font-bold text-gray-750">{{ $variation->minPrice() }}</span>
                            </a>
                        @endforeach
                    </div>
                    <div class="text-center my-10">
                        {{ $variations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
