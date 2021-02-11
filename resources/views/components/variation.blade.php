<div class="variation flex sm:flex-col">
    <div class="w-42/100 l:w-1/2 sm:w-8/12 xs:w-full pb-8 relative">
        <div class="w-full flex mb-6 sm:mb-0">
            <div class="w-6 sm:hidden">
                <div>
                    <button class="w-6 h-6 mb-3 border-2 border-brown-500 border-solid rounded-full overflow-hidden bg-white relative">
                        <span class="rounded-full bg-brown-500 m-auto absolute inset-0 w-3 h-3"></span>
                    </button>
                    <button class="w-6 h-6 mb-3 border-2 border-gray-800 border-solid rounded-full overflow-hidden bg-gray-800 relative">
                        <span class="rounded-full bg-gray-800 m-auto absolute inset-0 w-3 h-3"></span>
                    </button>
                    <button class="w-6 h-6 mb-3 border-2 border-red-400 border-solid rounded-full overflow-hidden bg-red-400 relative">
                        <span class="rounded-full bg-red-400 m-auto absolute inset-0 w-3 h-3"></span>
                    </button>
                    <button class="w-6 h-6 mb-3 border-orange-200 border-red-500 border-solid rounded-full overflow-hidden bg-orange-200 relative">
                        <span class="rounded-full bg-orange-200 m-auto absolute inset-0 w-3 h-3"></span>
                    </button>
                    <button class="w-6 h-6 mb-3 border-2 border-blue-400 border-solid rounded-full overflow-hidden bg-blue-400 relative">
                        <span class="rounded-full bg-blue-400 m-auto absolute inset-0 w-3 h-3"></span>
                    </button>
                </div>
            </div>
            <div class="w-full px-14 sm:px-0">
                <x-flickity class="relative overflow-hidden product-image focus:outline-none" options="{
                                        cellAlign: 'left',
                                        prevNextButtons: false,
                                        draggable: true,
                                        pageDots: false,
                                    }" data="slide: 1">
                    <div class="w-full h-auto absolute sm:overflow-hidden">
                        <img class="w-full h-auto object-contain object-top" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-full h-auto absolute sm:overflow-hidden">
                        <img class="w-full h-auto object-contain object-top" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-full h-auto absolute sm:overflow-hidden">
                        <img class="w-full h-auto object-contain object-top" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-full h-auto absolute sm:overflow-hidden">
                        <img class="w-full h-auto object-contain object-top" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-full h-auto absolute sm:overflow-hidden">
                        <img class="w-full h-auto object-contain object-top" src="images/product-image.jpg" alt="">
                    </div>
                </x-flickity>
            </div>
        </div>
        <div class="flex justify-center sm:justify-start">
            <div class="w-10/12 sm:w-full py-2 px-10 bg-white rounded-r shadow-md relative">
                <x-flickity class="w-full focus:outline-none w-96 overflow-hidden nav-slider" data="slide: 1" options="{
                                    cellAlign: 'center',
                                    asNavFor: '.product-image',
                                    prevNextButtons: true,
                                    contain: true,
                                    pageDots: false,
                                    arrowShape: `M2.4,53.7l35.6,34.5c2.1,2,5.5,2,7.6,0l3.2-3.1c1-1,1.6-2.3,1.6-3.7
                                        c0-1.4-0.6-2.8-1.6-3.7L28,57.5h65.9c2.9,0.1,5.2-2.2,5.3-5c0,0,0-0.1,0-0.1v-4.4c0-2.9-2.4-5.3-5.3-5.4H27.8l21-20.3
                                        c2-1.9,2.1-5.1,0.2-7.2c-0.1-0.1-0.1-0.1-0.2-0.2l-3.2-3.1c-2.1-2-5.5-2-7.6,0L2.3,46.3c-2,2-2.1,5.2-0.1,7.3
                                        C2.3,53.6,2.3,53.7,2.4,53.7L2.4,53.7z`,
                                }">
                    <div class="w-22 h-22 absolute mx-1 border-2 rounded border-solid border-white nav-cell cursor-pointer">
                        <img class="w-full h-full object-contain" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-22 h-22 absolute mx-1 border-2 rounded border-solid border-white nav-cell cursor-pointer">
                        <img class="w-full h-full object-contain" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-22 h-22 absolute mx-1 border-2 rounded border-solid border-white nav-cell cursor-pointer">
                        <img class="w-full h-full object-contain" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-22 h-22 absolute mx-1 border-2 rounded border-solid border-white nav-cell cursor-pointer">
                        <img class="w-full h-full object-contain" src="images/product-image.jpg" alt="">
                    </div>
                    <div class="w-22 h-22 absolute mx-1 border-2 rounded border-solid border-white nav-cell cursor-pointer">
                        <img class="w-full h-full object-contain" src="images/product-image.jpg" alt="">
                    </div>
                </x-flickity>
            </div>
        </div>
    </div>
    <div class="w-58/100 l:w-1/2 sm:w-10/12 xsm:w-full pl-12 lg:pl-6 sm:pl-0 pt-2 sm:flex sm:flex-col xs:px-5">
        <div class="w-80/100 lg:w-11/12 sm:w-full mb-6">
            <span class="text-base font-medium text-gray-200">Fur coat</span>
            <h1 class="text-2xl font-semibold text-gray-700 tracking-wide mb-2">Faux fur coat Glamorous Petite</h1>
            <p class="text-gray-200 font-medium text-sm">Created in Manchester, the Glamorous brand pays special attention to individual style.
                An eclectic combination of vintage spirit with the latest fashion trends is embodied in such
                popular party clothes.</p>
        </div>
        <div class="w-3/4 pr-10 lg:pr-0 lg:w-11/12 sm:w-full mb-12 sm:mb-5 sm:order-4">
            <div class="flex justify-between items-end">
                <span class="text-lg font-medium text-gray-700 ">Select Size:</span>
                <a class="text-sm underline font-medium text-gray-200" href="#">Size guide</a>
            </div>
            <div class="pt-2 flex">
                <button class="size-item active">XS</button>
                <button class="size-item">S</button>
                <button class="size-item">M</button>
                <button class="size-item">L</button>
                <button class="size-item">XL</button>
                <button class="size-item">XXL</button>
            </div>
        </div>
        <div class="flex items-center w-3/4 lg:w-11/12 sm:w-full pr-10 lg:pr-0 justify-between mb-10 sm:mb-5 sm:order-2">
            <div class="flex l:flex-col items-center l:items-start">
                <span class="font-bold text-4.5xl text-gray-700 mr-6 l:mr-0 leading-snug">$51,63</span>
                <span class="font-semibold text-base text-gray-200">$76,32 <span class="text-red-500">(-19%)</span></span>
            </div>
            <div class="counter-wrap w-28 flex items-center rounded border border-solid border-gray-100 shadow-md">
                <button class="font-avenir font-semibold text-lg text-gray-350 py-2 px-2 text-center w-12"><span class="">-</span></button>
                <input class="text-lg font-semibold font-avenir text-gray-200 w-full text-center" value="1" type="number" placeholder="1">
                <button class="font-avenir font-semibold text-lg text-gray-350 py-2 px-2 text-center w-12"><span class="">+</span></button>
            </div>
        </div>
        <div class="hidden sm:block mb-4 order-3">
            <p class="text-sm font-medium text-gray-700 mb-3">Select color: <span class="uppercase underline">brown</span></p>
            <div class="flex">
                <button class="w-6 h-6 mr-3 border-2 border-brown-500 border-solid rounded-full overflow-hidden bg-white relative">
                    <span class="rounded-full bg-brown-500 m-auto absolute inset-0 w-3 h-3"></span>
                </button>
                <button class="w-6 h-6 mr-3 border-2 border-gray-800 border-solid rounded-full overflow-hidden bg-gray-800 relative">
                    <span class="rounded-full bg-gray-800 m-auto absolute inset-0 w-3 h-3"></span>
                </button>
                <button class="w-6 h-6 mr-3 border-2 border-red-400 border-solid rounded-full overflow-hidden bg-red-400 relative">
                    <span class="rounded-full bg-red-400 m-auto absolute inset-0 w-3 h-3"></span>
                </button>
                <button class="w-6 h-6 mr-3 border-orange-200 border-red-500 border-solid rounded-full overflow-hidden bg-orange-200 relative">
                    <span class="rounded-full bg-orange-200 m-auto absolute inset-0 w-3 h-3"></span>
                </button>
                <button class="w-6 h-6 mr-3 border-2 border-blue-400 border-solid rounded-full overflow-hidden bg-blue-400 relative">
                    <span class="rounded-full bg-blue-400 m-auto absolute inset-0 w-3 h-3"></span>
                </button>
            </div>
        </div>
        <div class="w-90/100 pr-2 lg:pr-0 lg:w-11/12 mb-8 sm:hidden">
            <div class="flex l:flex-col bg-green-50 shadow-lg items-end py-7 px-6 rounded-lg">
                <div class="border-r-2 l:border-r-0 border-gray-125 border-solid pr-4 l:pr-0 w-38/100 x:w-1/2 l:w-full l:mb-5">
                    <h4 class="text-lg font-bold text-gray-700">Method Of Delivery</h4>
                    <div class="flex pt-1">
                        <div class="pt-1">
                            <svg width="39.709" height="26.527" viewBox="0 0 39.709 26.527">
                                <defs>
                                    <clipPath>
                                        <rect width="39.709" height="26.527" rx="5" transform="translate(751 1181)" fill="#8b8b8b"/>
                                    </clipPath>
                                </defs>
                                <g transform="translate(-751 -1181)" clip-path="url(#clip-path)">
                                    <g transform="translate(751 1181.704)">
                                        <g data-name="Сгруппировать 79" transform="translate(0 0)">
                                            <g>
                                                <path d="M36.929,55.475,35.9,51.362a.622.622,0,0,0,.492-.608v-.663a2.614,2.614,0,0,0-2.611-2.611H29.1V46.111a1.286,1.286,0,0,0-1.285-1.285H3.938a1.286,1.286,0,0,0-1.285,1.285V57.386a.622.622,0,1,0,1.244,0V46.111a.041.041,0,0,1,.041-.041H27.813a.041.041,0,0,1,.041.041V57.386a.622.622,0,1,0,1.244,0v-.7h7.338a2.035,2.035,0,0,1,1.932,1.409H36.434a.622.622,0,0,0-.622.622v1.326a1.95,1.95,0,0,0,1.948,1.948h.7v2.736H36.84a3.937,3.937,0,0,0-7.443,0h-.3V60.039a.622.622,0,1,0-1.244,0v4.684h-12.9a3.937,3.937,0,0,0-7.443,0H3.938a.041.041,0,0,1-.041-.041V63.313H6.591a.622.622,0,1,0,0-1.244H.622a.622.622,0,1,0,0,1.244H2.653v1.368a1.286,1.286,0,0,0,1.285,1.285H7.3c0,.014,0,.028,0,.041a3.938,3.938,0,0,0,7.875,0c0-.014,0-.028,0-.041H29.182c0,.014,0,.028,0,.041a3.938,3.938,0,0,0,7.875,0c0-.014,0-.028,0-.041h2.032a.622.622,0,0,0,.622-.622V58.712A3.279,3.279,0,0,0,36.929,55.475ZM29.1,48.723h4.684a1.369,1.369,0,0,1,1.368,1.368v.041H29.1Zm0,6.715V51.376h5.525l1.016,4.062ZM11.233,68.7a2.694,2.694,0,1,1,2.694-2.694A2.7,2.7,0,0,1,11.233,68.7Zm21.886,0a2.694,2.694,0,1,1,2.694-2.694A2.7,2.7,0,0,1,33.119,68.7Zm5.347-7.958h-.7a.705.705,0,0,1-.7-.7v-.7h1.409v1.409Z" transform="translate(0 -44.826)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                        <g transform="translate(9.948 19.896)">
                                            <g>
                                                <path d="M62.412,167.082a1.285,1.285,0,1,0,1.285,1.285A1.286,1.286,0,0,0,62.412,167.082Z" transform="translate(-61.127 -167.082)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                        <g transform="translate(31.834 19.896)">
                                            <g>
                                                <path d="M196.893,167.082a1.285,1.285,0,1,0,1.285,1.285A1.286,1.286,0,0,0,196.893,167.082Z" transform="translate(-195.608 -167.082)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                        <g transform="translate(15.917 17.243)">
                                            <g>
                                                <path d="M107.71,150.781H98.425a.622.622,0,0,0,0,1.244h9.285a.622.622,0,1,0,0-1.244Z" transform="translate(-97.804 -150.781)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                        <g transform="translate(1.326 14.59)">
                                            <g>
                                                <path d="M16.73,134.48H8.772a.622.622,0,0,0,0,1.244H16.73a.622.622,0,1,0,0-1.244Z" transform="translate(-8.15 -134.48)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                        <g transform="translate(11.274 5.969)">
                                            <g>
                                                <path d="M79.624,81.685a.622.622,0,0,0-.879,0l-5.529,5.529-2.876-2.876a.622.622,0,0,0-.879.879l3.316,3.316a.622.622,0,0,0,.879,0l5.969-5.969A.622.622,0,0,0,79.624,81.685Z" transform="translate(-69.278 -81.503)" fill="#8b8b8b"/>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="pl-4">
                            <span class="text-base text-gray-700 font-medium">Delivery: </span>
                            {{--<div class="date product-select-wrapper">--}}
                            {{--<x-select class="text-gray-750 font-medium">--}}
                            {{--<option value="Arizona">Arizona</option>--}}
                            {{--</x-select>--}}
                            {{--</div>--}}
                            <a class="underline font-medium text-base text-blue-500" href="#">Arizona</a>
                            <div class="relative" x-data="{show: false}" x-cloak @mouseover="show = true" @mouseout="show = false">
                                <div x-show.transition.duration.200ms="show" class="pb-4 -left-1/2 bottom-4 absolute">
                                    <div class="tooltip-wrap relative bg-white w-68 px-6 pt-6 pb-8 rounded h-auto  border border-solid border-gray-200">
                                        <p class="text-sm font-medium text-gray-600">
                                            <span class="underline">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>
                                <span class="text-sm font-medium text-gray-350 cursor-pointer underline">Get it by may 7</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pl-10 l:pl-0 w-62/100 x:w-1/2 l:w-full">
                    <p class="text-gray-200 font-medium text-sm">The cost of delivery depends on your state</p>
                    <a class="italic underline font-medium text-blue-500 text-sm" href="#">More Information</a>
                </div>
            </div>
        </div>
        <div class="flex l:flex-col mb-10 sm:order-6">
            <button class="text-lg font-semibold font-avenir text-white bg-black sm:bg-orange-350 sm:rounded-lg leading-tight py-4 px-15 mr-2 l:mr-0">Add to cart</button>
            <button class="text-lg font-semibold font-avenir  underline leading-tight py-4 px-8">Add to Wish List</button>
        </div>
    </div>
</div>
