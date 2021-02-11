<x-layouts.master>
    <div id="profile">
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
                    <span class="text-gray-750 font-medium text-sm">My Account</span>
                </div>
            </div>
            <div class="w-10/12 l:w-full m-auto">
                <x-layouts.account>
                    <div class="title absolute sm:hidden">
                        <h1 class="bg-white px-3 text-3xl text-gray-750">My account</h1>
                    </div>
                    <div class="flex justify-between mb-10 sm:mb-0 pt-20 sm:pt-0 sm:px-5">
                        <div class="flex w-full 2xs:flex-col">
                            <div class="mr-5 w-20 sm:w-24 h-20 sm:h-24 rounded-full overflow-hidden 2xs:mb-4">
                                <img src="/images/vbn.jpg" alt="" class="w-full">
                            </div>
                            <div class="w-full">
                                <div class="flex w-full justify-between lg:flex-col">
                                    <div>
                                        <p class="text-2xl font-medium text-gray-750 leading-none">{{ Auth::user()->name}}</p>
                                        <p class="text-sm font-medium text-gray-520 mb-4 lg:mb-2">Email: {{ Auth::user()->email}}</p>
                                    </div>
                                    <div class="lg:mb-2">
                                        <div class="border-2 coins relative border-orange-350 inline-block pl-4 pr-12 py-1">
                                            <p class="text-base font-medium text-gray-580">{{ Auth::user()->bonus_points['available_points'] }}</p>
                                        </div>
                                    </div>
                                </div>
                                @if(Auth::user()->address)
                                    <div class="flex items-center sm:hidden">
                                        <img src="/images/usa-flag.png" alt="" class="w-7 h-7 mr-3">
                                        <div>
                                            <p class="text-base font-medium text-gray-520 leading-none border-b border-gray-520"><span>{{ Auth::user()->address->country }}</span>, <span>{{ Auth::user()->address->state->name }}</span></p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @if(count($viewedVariations))
                        <div class="flex py-3 bg-gray-450 mb-10 px-10 sm:hidden">
                            <h2 class="text-base text-gray-750 font-medium mr-1">Previously Viewed Products</h2>
                        </div>
                        <div class="product-block w-full flex mb-6 sm:hidden">
                        <x-flickity class="popular-slider w-full overflow-hidden focus:outline-none flex flex-col"
                                    data="slide: 1" options="{
                                        cellAlign: 'left',
                                        prevNextButtons: true,
                                        pageDots: false,
                                        cellSelector: '.carousel-cell',
                                        on: {
                                          change(index) {
                                              slide = index + 1
                                          }
                                        }
                                    }">
                            @foreach($viewedVariations as $viewedVariation)
                                <div class="product-card carousel-cell w-48 mr-5">
                                    <img src="{{ '/storage/' . $viewedVariation->miniature }}"
                                         alt="{{ $viewedVariation->name() }}"
                                         class="mb-4 object-cover w-full h-auto">
                                    <p class="text-sm font-semibold text-gray-750 mb-3">{{ $viewedVariation->name() }}</p>
                                    <p class="text-gray-750 font-bold text-xl">{{ $viewedVariation->minPrice() }}</p>
                                </div>
                            @endforeach
                            <div class="flex justify-end order-2 pt-5">
                                <button class="focus:outline-none arrow arrow-prev" @click="flickity.previous()">
                                    <svg class="w-7 h-3 fill-current text-gray-540" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                        <path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                                    </svg>
                                </button>
                                <p class="px-2"><span x-text="slide"></span> / <span x-text="flickity ? flickity.slides.length : 1"></span></p>
                                <button class="focus:outline-none arrow arrow-prev" @click="flickity.next()">
                                    <svg class="w-7 h-3 fill-current text-gray-750" viewBox="0 0 492.004 492.004" style="enable-background:new 0 0 492.004 492.004;" xml:space="preserve">
                                        <path   d="M484.14,226.886L306.46,49.202c-5.072-5.072-11.832-7.856-19.04-7.856c-7.216,0-13.972,2.788-19.044,7.856l-16.132,16.136
                                            c-5.068,5.064-7.86,11.828-7.86,19.04c0,7.208,2.792,14.2,7.86,19.264L355.9,207.526H26.58C11.732,207.526,0,219.15,0,234.002
                                            v22.812c0,14.852,11.732,27.648,26.58,27.648h330.496L252.248,388.926c-5.068,5.072-7.86,11.652-7.86,18.864
                                            c0,7.204,2.792,13.88,7.86,18.948l16.132,16.084c5.072,5.072,11.828,7.836,19.044,7.836c7.208,0,13.968-2.8,19.04-7.872
                                            l177.68-177.68c5.084-5.088,7.88-11.88,7.86-19.1C492.02,238.762,489.228,231.966,484.14,226.886z"/>
                                    </svg>
                                </button>
                            </div>
                        </x-flickity>
                    </div>
                    @endif
                </x-layouts.account>
            </div>
        </div>
    </div>
</x-layouts.master>
