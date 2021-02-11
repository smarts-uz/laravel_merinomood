<x-account-base>
    <div id="orders" class="w-8/12 sm:w-full pl-20 lg:pl-10 sm:pl-0 py-5 xs:py-0">
        <div>
            <div class="flex items-center mb-5">
                <img class="hidden sm:inline mr-4" src="{{ asset('/images/icons/order.svg') }}" alt="">
                <h1 class="text-3xl xs:text-xl font-medium text-gray-700">Order History</h1>    
            </div>
            <div class="w-full">
                <div class="shadow-4lg flex xs:hidden">
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>Date</span></div>
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>#Order</span></div>
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>Bonus</span></div>
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>Status</span></div>
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>Order Total</span></div>
                    <div class="text-center py-3 text-sm font-medium text-black w-2/12"><span>Details</span></div>
                </div>
                <div>
                    @foreach(range(1, 3) as $item)
                        <div class="order border-t-2 border-gray-125" :class="{ 'mb-4 border-b-2': open}"  x-data="{ open: false }">
                            <div class="border-l-2 border-r-2 border-gray-125">
                                <div class="flex xs:justify-between xs:px-3">
                                    <div class="py-3 text-sm font-medium text-black w-2/12 xs:w-1/5 text-center"><span>28/08/20</span></div>
                                    <div class="py-3 text-sm font-medium text-black w-2/12 text-center xs:hidden"><span>#1489014</span></div>
                                    <div class="py-3 text-sm font-medium text-black w-2/12 text-center xs:hidden"><span>+ 11.43 Bonus</span></div>
                                    <div class="py-3 text-sm font-medium text-green-300 w-2/12 xs:w-1/3 text-center 3xs:text-left"><span>Delivered</span></div>
                                    <div class="py-3 text-sm font-medium text-black w-2/12 text-center xs:hidden"><span>$ 58.63</span></div>
                                    <div class="py-2 text-sm font-medium text-black w-2/12 xs:w-1/5 pr-5 lg:pr-3 md:pr-1 sm:pr-4 xs:pr-0 flex justify-end items-center">
                                        <div x-show="!open">
                                            <button class="flex justify-end cursor-pointer focus:outline-none" @click="open = !open">
                                                <span class="text-gray-350 font-medium border-dotted border-2 border-gray-125 rounded-md py-1 px-6">More</span>
                                            </button>
                                        </div>
                                        <div x-show="open" x-cloak>
                                            <button class="flex justify-end cursor-pointer focus:outline-none mr-4 xs:mr-0" @click="open = !open">
                                                <svg class="xs:hidden w-3 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                                    <path d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872
                                                            c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872
                                                            c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052
                                                            L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116
                                                            c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952
                                                            c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116
                                                            c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
                                                </svg>
                                                <span class="hidden xs:inline text-gray-350 font-medium border-dotted border-2 border-gray-125 rounded-md py-1 px-6">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col border-t-2 border-gray-125 pt-2 pb-4" x-show.transition.in.duration.300ms.out.duration.200ms="open" x-cloak>
                                    <div class="flex xs:flex-col">
                                        <div class="w-1/2 xs:w-full flex">
                                            <div class="w-4/12 xs:w-1/2 px-4 s:px-2 py-2">
                                                <img src="/images/mobile-promo-banner.jpg" alt="" class="w-full object-contain rounded-lg">
                                            </div>
                                            <div class="w-8/12 xs:w-1/2 py-4 pl-3 xs:pl-0 pr-10 xs:pr-4 s:pr-2">
                                                <p class="text-sm font-medium mb-2">Light brown faux fur coat Only & Sons</p>
                                                <span class="font-bold text-3xl xs:text-2xl leading-none">$60,92</span>
                                            </div>
                                        </div>
                                        <div class="w-1/2 xs:w-full py-4 pr-5 xs:pr-0 pl-4 s:pl-2">
                                            <div class="pl-4 xs:pl-0 flex">
                                                <div class="flex flex-col">
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Name:</h5><span class="text-gray-200">Nurs Komarov</span></div>
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Address:</h5><span class="text-gray-200">KG, Bishkek, 8/11/47</span></div>
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Size:</h5><span class="text-gray-200">M, XXL</span></div>
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Color:</h5><span class="text-gray-200">Green</span></div>
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Quantity:</h5><span class="text-gray-200">2 Item</span></div>
                                                    <div class="text-sm font-medium flex"><h5 class="mr-1 w-24">Sku:</h5><span class="text-gray-200">#77845747</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-end pt-10 xs:pt-5 pb-6 xs:pl-4 s:pl-2">
                                        <div class="w-10/12 xs:w-full">
                                            <div class="flex">
                                                <div class="mr-8 3xs:mr-5">
                                                    <p class="text-sm font-medium mb-1">Review This Item</p>
                                                    <x-rater options="{rating: 3, starSize: 18}"></x-rater>
                                                </div>
                                                <div>
                                                    <button class="text-base s:text-sm font-medium text-gray-350 border-2 border-gray-350 py-2 px-8 s:px-4 focus:outline-none">Write A Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="pt-8">
                <div class="text-gray-700 font-medium text-base flex items-center justify-end xs:justify-center">
                    <button class="mr-2 focus:outline-none">
                        <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                        <path class="fill-current text-gray-350" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                    </svg>
                    </button>
                    <span>1</span>
                    <span class="text-gray-350">/</span>
                    <span class="text-gray-350">15 </span>
                    <button class="transform rotate-180 ml-2 focus:outline-none">
                        <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                        <path class="fill-current text-gray-700" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                            c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                            L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                            c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                            c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                            C492,219.198,479.172,207.418,464.344,207.418z"/>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-account-base>
