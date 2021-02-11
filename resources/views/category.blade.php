<x-layouts.master>
    <div id="category" x-data="{ sortMenu:false, filterMenu: false }">
        <div class="container">
            <div class="breadcrumbs py-3 mb-4 sm:my-3 flex sm:flex-col-reverse">
                <h1 class="text-5xl font-bold font-bebas mr-8 leading-none">Catalog</h1>
                <div class="flex items-center font-medium text-sm sm:mb-4">
                    <a href="/" class="text-gray-200 font-medium text-sm mr-4">Home</a>
                    <span class="mr-4">
                        <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" />
                        </svg>
                    </span>
                    <span class="text-gray-750 font-medium text-sm">Catalog</span>
                </div>
            </div>
            <div class="flex pb-20 xs:pb-10">
                <div class="w-3/12 sm:hidden">
                    <div class="text-sm font-medium text-gray-200 flex flex-col mb-8">
                        <a href="#">New</a>
                        <a href="#">Sale</a>
                        <a href="#">Gift Sets</a>
                    </div>
                    <div class="pb-6 border-b-2 border-gray-200 mb-4">
                        <div x-data="{open: false}">
                            <x-collapse>
                                @slot('trigger')
                                <div class="flex justify-between items-center mb-3" @click="open = !open">
                                    <h2 class="text-lg font-medium">Woman</h2>
                                    <div class="w-4 h-4">
                                        <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                            <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                            <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                        </div>
                                    </div>
                                </div>
                                @endslot
                                <ul class="text-sm font-medium text-gray-200 pb-10">
                                    <li class="mb-1">
                                        <a href="#">Robes</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Loungewear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Sleepwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Outerwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Pullovers & Tops</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            Premium Collection
                                        </a>
                                    </li>
                                </ul>
                            </x-collapse>
                        </div>
                        <div x-data="{open: false}">
                            <x-collapse>
                                @slot('trigger')
                                <div class="flex justify-between items-center mb-3" @click="open = !open">
                                    <h2 class="text-lg font-medium">Man</h2>
                                    <div class="w-4 h-4">
                                        <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                            <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                            <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                        </div>
                                    </div>
                                </div>
                                @endslot
                                <ul class="text-sm font-medium text-gray-200 pb-10">
                                    <li class="mb-1">
                                        <a href="#">Robes</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Loungewear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Sleepwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Outerwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Pullovers & Tops</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            Premium Collection
                                        </a>
                                    </li>
                                </ul>
                            </x-collapse>
                        </div>
                        <div x-data="{open: false}">
                            <x-collapse>
                                @slot('trigger')
                                <div class="flex justify-between items-center mb-3" @click="open = !open">
                                    <h2 class="text-lg font-medium">Kids</h2>
                                    <div class="w-4 h-4">
                                        <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                            <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                            <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                        </div>
                                    </div>
                                </div>
                                @endslot
                                <ul class="text-sm font-medium text-gray-200 pb-10">
                                    <li class="mb-1">
                                        <a href="#">Robes</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Loungewear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Sleepwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Outerwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Pullovers & Tops</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            Premium Collection
                                        </a>
                                    </li>
                                </ul>
                            </x-collapse>
                        </div>
                        <div x-data="{open: false}">
                            <x-collapse>
                                @slot('trigger')
                                <div class="flex justify-between items-center mb-3" @click="open = !open">
                                    <h2 class="text-lg font-medium">Accessories</h2>
                                    <div class="w-4 h-4">
                                        <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                            <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                            <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                        </div>
                                    </div>
                                </div>
                                @endslot
                                <ul class="text-sm font-medium text-gray-200 pb-10">
                                    <li class="mb-1">
                                        <a href="#">Robes</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Loungewear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Sleepwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Outerwear</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">Pullovers & Tops</a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#">
                                            Premium Collection
                                        </a>
                                    </li>
                                </ul>
                            </x-collapse>
                        </div>
                    </div>
                    <div>
                        <span class="text-base font-medium">Color</span>
                        <div class="flex flex-wrap pt-3">
                            <button class="w-5 h-5 focus:outline-none rounded-full border-2 border-gray-300 bg-red-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-blue-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-green-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-yellow-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-pink-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-gray-500 mr-2 mb-2"></button>
                            <button class="w-5 h-5 focus:outline-none rounded-full bg-purple-500 mr-2 mb-2"></button>
                        </div>
                    </div>
                </div>
                <div class="w-9/12 sm:w-full pl-5 sm:pl-0">
                    <div class="flex shadow-4lg px-5 md:px-4 mb-8 items-start">
                        <div class="flex flex-wrap w-8/12 lg:w-3/5 l:w-1/2 md:w-7/12 sm:hidden pt-4">
                            @foreach(range(1, 5) as $item)
                            <div class="flex justify-between items-center w-24 bg-gray-250 px-3 py-2 rounded-lg mr-3 mb-4">
                                <span class="text-sm font-medium">Man</span>
                                <div class="relative w-4 h-4 flex justify-center items-center cursor-pointer">
                                    <div class="transform rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                    <div class="transform absolute -rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="w-4/12 lg:w-2/5 l:w-1/2 sm:w-full flex justify-end pt-4 sm:py-2">
                            <div class="flex justify-between lg:justify-end sm:justify-between items-center w-full">
                                <div class="flex pr-2 w-10/12 lg:w-8/12 md:w-9/12 sm:hidden items-center">
                                    <span class="text-base font-medium pr-1">Sort:</span>
                                    <div x-data="{sort: ['Price - Low to High', 'Price - High to Low', 'Customer Rating', 'Recommended']}" class="font-medium text-sm mr-2 cursor-pointer sort w-8/12 x:w-10/12 lg:w-9/12 relative">
                                        <x-select class="sm:hidden">
                                            <template x-for="item in sort">
                                                <option x-text="item"></option>
                                            </template>
                                        </x-select>
                                        <span class="sort-arrow transform rotate-90 absolute top-0 right-0 bottom-0 sm:right-auto">
                                            <svg class="w-4 h-6" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                                <path style="fill:#1E201D;" class="fill-current text-gray-800 font-medium" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                    C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                    c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="hidden sm:block relative">
                                    <button @click="sortMenu = !sortMenu; $dispatch('trigger-scroll')" class="flex items-center focus:outline-none">
                                        <span class="text-base font-medium pr-1 sm:mr-5">Sort By</span>
                                        <span class="sort-arrow transform rotate-90 absolute top-0 bottom-0">
                                            <svg class="w-4 h-6" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve">
                                                <path style="fill:#1E201D;" class="fill-current text-gray-800 font-medium" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                                C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                                c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="flex pt-1 sm:hidden">
                                    <button class="w-8 h-8 flex flex-wrap justify-between mr-1 cursor-pointer focus:outline-none">
                                        <svg class="fill-current" width="29" height="29" viewBox="0 0 20.696 21">
                                            <g transform="translate(8.388)">
                                                <g transform="translate(-8.388)">
                                                    <g transform="translate(0)">
                                                        <path class="fill-current text-gray-300 text-red-500" d="M8.09,0H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09A.609.609,0,0,0,8.7,5.478V.609A.609.609,0,0,0,8.09,0Z" transform="translate(-2.612)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M133.478,0h-4.87A.609.609,0,0,0,128,.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V.609A.609.609,0,0,0,133.478,0Z" transform="translate(-120.696)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M8.09,125.388H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,8.09,125.388Z" transform="translate(-2.612 -118.084)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M133.478,125.388h-4.87A.609.609,0,0,0,128,126v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,133.478,125.388Z" transform="translate(-120.696 -118.084)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M258.866,0H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V.609A.609.609,0,0,0,258.866,0Z" transform="translate(-238.779)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M258.866,125.388H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609V126A.609.609,0,0,0,258.866,125.388Z" transform="translate(-238.779 -118.084)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M8.09,256H3.221a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609H8.09a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,8.09,256Z" transform="translate(-2.612 -241.087)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M133.478,256h-4.87a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,133.478,256Z" transform="translate(-120.696 -241.087)" />
                                                        <path class="fill-current text-gray-300 text-red-500" d="M258.866,256H254a.609.609,0,0,0-.609.609v4.87a.609.609,0,0,0,.609.609h4.87a.609.609,0,0,0,.609-.609v-4.87A.609.609,0,0,0,258.866,256Z" transform="translate(-238.779 -241.087)" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="w-8 h-8 flex flex-col justify-between cursor-pointer focus:outline-none">
                                        <svg class="fill-current" width="29" height="29" viewBox="0 0 20.738 20.738">
                                            <g>
                                                <g>
                                                    <path class="fill-current text-gray-350" d="M8.774,0H.8A.8.8,0,0,0,0,.8V8.774a.8.8,0,0,0,.8.8H8.774a.8.8,0,0,0,.8-.8V.8A.8.8,0,0,0,8.774,0Z" />
                                                    <path class="fill-current text-gray-350" d="M155.059,0h-7.976a.8.8,0,0,0-.8.8V8.774a.8.8,0,0,0,.8.8h7.976a.8.8,0,0,0,.8-.8V.8A.8.8,0,0,0,155.059,0Z" transform="translate(-135.118 0)" />
                                                    <path class="fill-current text-gray-350" d="M8.774,146.286H.8a.8.8,0,0,0-.8.8v7.976a.8.8,0,0,0,.8.8H8.774a.8.8,0,0,0,.8-.8v-7.976A.8.8,0,0,0,8.774,146.286Z" transform="translate(0 -135.119)" />
                                                    <path class="fill-current text-gray-350" d="M155.059,146.286h-7.976a.8.8,0,0,0-.8.8v7.976a.8.8,0,0,0,.8.8h7.976a.8.8,0,0,0,.8-.8v-7.976A.8.8,0,0,0,155.059,146.286Z" transform="translate(-135.118 -135.119)" />
                                                </g>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="hidden sm:block">
                                    <button @click="filterMenu = !filterMenu; $dispatch('trigger-scroll')" class="flex items-center focus:outline-none">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.829" height="17.914" viewBox="0 0 16.829 17.914">
                                            <g id="_167797" data-name="167797" transform="translate(-9.996)">
                                                <g id="Group_275" data-name="Group 275" transform="translate(9.996)">
                                                    <path id="Path_189" data-name="Path 189" d="M26.01,0H10.81A.814.814,0,0,0,10,.814V4.071a.814.814,0,0,0,.267.6l5.7,5.186V17.1a.814.814,0,0,0,1.178.728L20.4,16.2a.814.814,0,0,0,.45-.728V9.86l5.7-5.186a.814.814,0,0,0,.267-.6V.814A.814.814,0,0,0,26.01,0ZM19.491,8.9a.814.814,0,0,0-.267.6v5.468l-1.629.814V9.5a.814.814,0,0,0-.267-.6L12.917,4.886H23.9Zm5.7-5.64H11.625V1.629H25.2Z" transform="translate(-9.996)" fill="#2f3036" />
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ml-1">Filter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap xs:justify-between">
                        @foreach(range(1, 6) as $item)
                        <a href="#" class="w-30/100 xs:w-47/100 product-card mb-10">
                            <div class="w-full mb-4">
                                <img src="/images/blog-inner-2.jpg" alt="" class="object-cover w-full h-full">
                            </div>
                            <div class="flex justify-between flex-col">
                                <div class="flex justify-between">
                                    <span class="text-xl font-bold">$51,63</span>
                                    <div class="flex">
                                        <button class="w-5 mr-2 focus:outline-none">
                                            <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path class="fill-current text-gray-300" d="M443.188,442.208L415.956,142.56c-0.768-8.256-7.68-14.56-15.968-14.56h-48V96c0-25.728-9.952-49.888-28.032-67.968
                                                    C305.876,9.952,281.716,0,255.988,0c-52.928,0-96,43.072-96,96v32h-48c-8.288,0-15.2,6.304-15.936,14.56L68.82,442.208
                                                    c-1.632,17.856,4.384,35.712,16.48,48.96S114.612,512,132.564,512h246.88c17.952,0,35.168-7.584,47.264-20.832
                                                    S444.788,460.064,443.188,442.208z M191.988,96c0-35.296,28.704-64,64-64c17.184,0,33.28,6.624,45.344,18.656
                                                    c12.064,12.032,18.656,28.16,18.656,45.344v32h-128V96z M403.06,469.6c-6.144,6.688-14.528,10.4-23.648,10.4H132.564
                                                    c-9.088,0-17.504-3.712-23.616-10.432c-6.144-6.72-9.056-15.392-8.224-24.48L126.612,160h33.376v48c0,8.832,7.168,16,16,16
                                                    c8.832,0,16-7.168,16-16v-48h128v48c0,8.832,7.168,16,16,16c8.832,0,16-7.168,16-16v-48h33.376l25.92,285.12
                                                    C412.116,454.176,409.204,462.88,403.06,469.6z" />
                                            </svg>
                                        </button>
                                        <button class="w-5 focus:outline-none">
                                            <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <path class="fill-current text-gray-300" d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                                                c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                                                c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                                                s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                                                C512,93.417,453.532,30,376,30z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <p class="text-sm font-medium h-6 overflow-hidden">White faux fur coat</p>
                                <p class="text-sm font-medium text-gray-600">Fur coat</p>
                            </div>
                        </a>
                        @endforeach
                    </div>
                    <div class="shadow-lg px-5 py-5">
                        <div class="text-gray-700 font-medium text-lg flex items-center justify-end">
                            <button class="mr-1">
                                <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                    <path class="fill-current text-gray-350" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                                        c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                                        L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                                        c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                                        c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                                        C492,219.198,479.172,207.418,464.344,207.418z" />
                                </svg>
                            </button>
                            <span>1</span>
                            <span class="text-gray-350">/</span>
                            <span class="text-gray-350">15 </span>
                            <button class="transform rotate-180 ml-1">
                                <svg class="w-4 h-3" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve">
                                    <path class="fill-current text-gray-700" d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124
                                        c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844
                                        L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412
                                        c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008
                                        c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788
                                        C492,219.198,479.172,207.418,464.344,207.418z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="flex flex-col items-center justify-center">--}}
                    {{-- <button class="text-lg font-medium py-3 px-12 bg-black text-white cursor-pointer focus:outline-none mb-3">Show more</button>--}}
                    {{-- <p class="text-gray-300 text-sm font-medium">You have viewed 72 out of 87 products</p>--}}
                    {{-- </div>--}}
                </div>
            </div>
        </div>

        <div x-show="sortMenu" class="blackout fixed top-0 h-screen w-full z-40" x-cloak>
            <div class="fixed top-0 overflow-y-scroll bg-white w-2/3 2sm:w-80/100 rounded-r-2xl h-screen z-50" x-show="sortMenu" @click.away="sortMenu = false; $dispatch('enable-scroll')" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform -translate-x-full">
                <div class="py-6 px-8 xs:px-4 h-screen relative flex flex-col">
                    <div class="flex items-center justify-between pr-6 sm:pr-0 mb-6 w-full">
                        <h2 class="text-4xl font-bold leading-none">Sort By</h2>
                        <button class="flex justify-center text-center focus:outline-none transition-transform duration-200 ease" @click="sortMenu = false; $dispatch('enable-scroll')">
                            <svg class="w-4 h-auto" viewBox="0 0 20.866 20.866">
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(19.156 20.866) rotate(-135)" fill="#2a2a2e" />
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(20.866 1.71) rotate(135)" fill="#2a2a2e" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col justify-between flex-auto">
                        <form class="mob-sort">
                            <div class="flex items-center mb-4">
                                <input type="radio" class="hidden" id="low" name="sort" value="price-asc">
                                <label class="cursor-pointer text-lg font-medium" for="low">Price - Low to High</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input type="radio" class="hidden" id="high" name="sort" value="price-desc">
                                <label class="cursor-pointer text-lg font-medium" for="high">Price - High to Low</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input type="radio" class="hidden" id="rate" name="sort" value="rating">
                                <label class="cursor-pointer text-lg font-medium" for="rate">Customer Rating</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input type="radio" class="hidden" id="recommend" name="sort" value="recommend" checked>
                                <label class="cursor-pointer text-lg font-medium" for="recommend">Recommended</label>
                            </div>
                        </form>
                        <button class="bg-gray-700 py-3 px-2 rounded-lg focus:outline-none">
                            <span class="text-white font-medium">Apply</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="filterMenu" class="blackout fixed top-0 h-screen w-screen z-40" x-cloak>
            <div class="fixed top-0 overflow-y-scroll bg-white w-2/3 2sm:w-80/100 rounded-r-2xl h-screen z-50" x-show="filterMenu" @click.away="filterMenu = false; $dispatch('enable-scroll')" x-transition:enter="transition ease-out duration-500" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform -translate-x-full">
                <div class="py-6 px-8 xs:px-4 h-screen relative flex flex-col">
                    <div class="flex items-center justify-between pr-6 sm:pr-0 mb-6 w-full">
                        <h2 class="text-4xl font-bold leading-none">Filter By</h2>
                        <button class="flex justify-center text-center focus:outline-none transition-transform duration-200 ease" @click="filterMenu = false; $dispatch('enable-scroll')">
                            <svg class="w-4 h-auto" viewBox="0 0 20.866 20.866">
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(19.156 20.866) rotate(-135)" fill="#2a2a2e" />
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(20.866 1.71) rotate(135)" fill="#2a2a2e" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-col flex-auto justify-between items-center pt-3">
                        <div class="w-full">
                            <div class="text-sm font-medium text-gray-200 flex flex-col mb-5">
                                <a href="#">New</a>
                                <a href="#">Sale</a>
                                <a href="#">Gift Sets</a>
                            </div>
                            <div class="pb-6 border-b-2 border-gray-200 mb-4">
                                <div x-data="{open: false}">
                                    <x-collapse>
                                        @slot('trigger')
                                        <div class="flex justify-between items-center mb-3" @click="open = !open">
                                            <h2 class="text-lg font-medium">Woman</h2>
                                            <div class="w-4 h-4">
                                                <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endslot
                                        <ul class="text-sm font-medium text-gray-200 pb-10">
                                            <li class="mb-1">
                                                <a href="#">Robes</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Loungewear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Sleepwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Outerwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Pullovers & Tops</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">
                                                    Premium Collection
                                                </a>
                                            </li>
                                        </ul>
                                    </x-collapse>
                                </div>
                                <div x-data="{open: false}">
                                    <x-collapse>
                                        @slot('trigger')
                                        <div class="flex justify-between items-center mb-3" @click="open = !open">
                                            <h2 class="text-lg font-medium">Man</h2>
                                            <div class="w-4 h-4">
                                                <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endslot
                                        <ul class="text-sm font-medium text-gray-200 pb-10">
                                            <li class="mb-1">
                                                <a href="#">Robes</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Loungewear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Sleepwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Outerwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Pullovers & Tops</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">
                                                    Premium Collection
                                                </a>
                                            </li>
                                        </ul>
                                    </x-collapse>
                                </div>
                                <div x-data="{open: false}">
                                    <x-collapse>
                                        @slot('trigger')
                                        <div class="flex justify-between items-center mb-3" @click="open = !open">
                                            <h2 class="text-lg font-medium">Kids</h2>
                                            <div class="w-4 h-4">
                                                <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endslot
                                        <ul class="text-sm font-medium text-gray-200 pb-10">
                                            <li class="mb-1">
                                                <div class="flex flex-wrap pt-4">
                                                    <a href="#">Robes</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Loungewear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Sleepwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Outerwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Pullovers & Tops</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">
                                                    Premium Collection
                                                </a>
                                            </li>
                                        </ul>
                                    </x-collapse>
                                </div>
                                <div x-data="{open: false}">
                                    <x-collapse>
                                        @slot('trigger')
                                        <div class="flex justify-between items-center mb-3" @click="open = !open">
                                            <h2 class="text-lg font-medium">Accessories</h2>
                                            <div class="w-4 h-4">
                                                <div class="w-full h-full top-0 left-0 flex justify-center items-center relative transform transition duration-300 ease-in-out" :class="{'rotate-45': open}">
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform rotate-45"></div>
                                                    <div class="w-full border bg-gray-800 border-gray-800 transform absolute -rotate-45"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endslot
                                        <ul class="text-sm font-medium text-gray-200 pb-10">
                                            <li class="mb-1">
                                                <a href="#">Robes</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Loungewear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Sleepwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Outerwear</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">Pullovers & Tops</a>
                                            </li>
                                            <li class="mb-1">
                                                <a href="#">
                                                    Premium Collection
                                                </a>
                                            </li>
                                        </ul>
                                    </x-collapse>
                                </div>
                            </div>
                            <div>
                                <span class="text-base font-medium">Color</span>
                                <div class="flex flex-wrap pt-3">
                                    <button class="w-5 h-5 focus:outline-none rounded-full border-2 border-gray-300 bg-red-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-blue-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-green-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-yellow-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-pink-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-gray-500 mr-2 mb-2"></button>
                                    <button class="w-5 h-5 focus:outline-none rounded-full bg-purple-500 mr-2 mb-2"></button>
                                </div>
                            </div>
                            <div class="flex flex-wrap pt-4">
                                <div class="flex justify-between items-center w-24 bg-gray-250 px-3 py-2 rounded-lg mr-3 mb-4">
                                    <span class="text-sm font-medium">Man</span>
                                    <div class="relative w-4 h-4 flex justify-center items-center cursor-pointer">
                                        <div class="transform rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                        <div class="transform absolute -rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center w-24 bg-gray-250 px-3 py-2 rounded-lg mr-3 mb-4">
                                    <span class="text-sm font-medium">Man</span>
                                    <div class="relative w-4 h-4 flex justify-center items-center cursor-pointer">
                                        <div class="transform rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                        <div class="transform absolute -rotate-45 border border-gray-800 w-full bg-gray-800"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="bg-gray-700 py-3 px-2 rounded-lg focus:outline-none">
                        <span class="text-white font-medium">Apply</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>