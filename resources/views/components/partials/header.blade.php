<header id="header" x-data="{ headerDropdown: false, mobMenu: false }">
    <div class="sticky shadow-md z-50 sm:z-auto bg-white w-full h-full">
        <div class="flex bg-gray-125 sm:hidden">
            <div class="container py-3 flex items-center justify-between">
                <a href="#" class="text-sm font-medium text-gray-350 underline leading-none">Store Opening Soon</a>
                <h2 class="text-sm font-medium text-gray-350 leading-none">FREE Express International Delivery + EASY Returns</h2>
                <div class="text-sm font-medium text-gray-350 leading-none">
                    <button class="mr-5">USD</button>
                    <button>EN</button>
                </div>
            </div>
        </div>
        <div class="container py-4 flex items-center justify-between md:py-3 md:flex-wrap sm:py-4">
            <div class="hidden sm:block">
                <button class="focus:outline-none" @click="mobMenu = true; $dispatch('trigger-scroll')">
                    <svg width="27.091" height="16.419" viewBox="0 0 27.091 16.419">
                        <g transform="translate(0 2)">
                            <rect width="27.091" height="2.419" rx="1.209" transform="translate(0 5)" fill="#2f3036" />
                            <rect width="27.091" height="2.419" rx="1.209" transform="translate(0 12)" fill="#2f3036" />
                            <rect width="27.091" height="2.419" rx="1.209" transform="translate(27.091 0.419) rotate(180)" fill="#2f3036" />
                        </g>
                    </svg>
                </button>
            </div>
            <div class="w-4/12 flex sm:hidden">
                <ul class="flex items-center justify-end">
                    <li class="inline-block text-base mr-8 font-medium text-gray-800 hover:text-gray-350 lg:mr-4" @click="headerDropdown = !headerDropdown"><a href="#">Woman</a></li>
                    <li class="inline-block text-base mr-8 font-medium text-gray-800 hover:text-gray-350 lg:mr-4" @click="headerDropdown = !headerDropdown"><a href="#">Man</a></li>
                    <li class="inline-block text-base mr-8 font-medium text-gray-800 hover:text-gray-350 lg:mr-4" @click="headerDropdown = !headerDropdown"><a href="#">Kids</a></li>
                    <li class="inline-block text-base mr-8 font-medium text-gray-800 hover:text-gray-350 lg:mr-4" @click="headerDropdown = !headerDropdown"><a href="#">Accessories</a></li>
                    <li class="inline-block text-base font-medium text-gray-800 hover:text-gray-350"><a href="/posts">Blog</a></li>
                </ul>
            </div>
            <div class="w-48 inline-block mx-6 md:mx-0 md:w-44 xs:w-40 transition duration-500 ease-in-out" :class="{'opacity-0': mobMenu}">
                <a href="/" class="block">
                    <svg version="1.1" x="0px" y="0px" viewBox="0 0 181.2 36.5" style="enable-background:new 0 0 181.2 36.5;">
                        <rect x="95.6" width="85.6" height="36.5" />
                        <g transform="translate(0 5.168)">
                            <path d="M2.6,0.7l7.2,15.6l0.6,1.2l0.5-1.4l6.9-15.4h2.5v21.7h-2.6V6.2l0.1-3l-7.7,17.2H9L1,3.3L1,5.2v17.2H0
                                V0.7H2.6z" />
                            <path d="M26.6,13.8c0,0.3-0.1,0.6-0.1,1c0,1.2,0.2,2.4,0.6,3.6c0.4,1,1,1.8,1.9,2.5c0.9,0.6,1.9,0.9,3,0.9
                                c1,0,1.9-0.2,2.8-0.7c0.8-0.5,1.6-1.1,2.2-1.9l0.5,0.6C36.8,20.6,36,21.4,35,22c-1.1,0.6-2.4,0.9-3.6,0.8c-1.3,0-2.6-0.3-3.7-0.9
                                c-1.1-0.6-2-1.5-2.5-2.7c-0.6-1.2-0.9-2.6-0.9-4c0-1.5,0.3-2.9,1-4.3c0.6-1.2,1.5-2.2,2.6-2.9C29,7.4,30.3,7,31.7,7
                                C32.8,7,34,7.3,35,7.9c1,0.6,1.7,1.4,2.2,2.4c0.5,1.1,0.8,2.3,0.7,3.5L26.6,13.8L26.6,13.8z M29.2,8.5c-0.7,0.5-1.3,1.1-1.7,1.9
                                c-0.5,0.9-0.8,1.8-0.9,2.8h8.8c0-1-0.2-2-0.6-2.9C34.5,9.6,34,9,33.4,8.5c-0.6-0.4-1.3-0.6-2-0.6C30.6,7.9,29.8,8.1,29.2,8.5z" />
                            <path d="M48.8,7.2c0.4,0.1,0.8,0.3,1.1,0.5l-0.3,0.9C48.9,8.2,48.1,8,47.4,8c-1.4,0-2.6,0.8-3.7,2.5v12h-2.5
                                V7.4H42l1.2,2.6c0.5-0.8,1.2-1.6,2-2.2C45.8,7.3,46.7,7,47.6,7C48,7,48.4,7.1,48.8,7.2z" />
                            <path d="M53,3.6c-0.3-0.3-0.5-0.7-0.5-1.1c0-0.4,0.1-0.8,0.5-1C53.3,1.1,53.7,1,54.1,1c0.4,0,0.9,0.1,1.2,0.5
                                c0.3,0.3,0.5,0.6,0.5,1c0,0.4-0.1,0.8-0.5,1.1C55,3.9,54.6,4,54.1,4C53.7,4,53.3,3.8,53,3.6z M52.9,7.4h2.5v15.1h-2.5V7.4z" />
                            <path d="M70.9,7.6c0.7,0.4,1.2,0.9,1.6,1.6c0.4,0.8,0.5,1.7,0.5,2.5v10.7h-2.5V11.9c0.1-1-0.2-1.9-0.8-2.6
                                c-0.6-0.6-1.5-1-2.3-0.9c-0.9,0-1.7,0.2-2.5,0.6c-0.8,0.4-1.6,1-2.3,1.6v11.8h-2.5V7.4h0.8l1.2,2.6c1.6-1.8,3.9-2.9,6.3-3
                                C69.3,7,70.1,7.1,70.9,7.6z" />
                            <path d="M79.8,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C82.3,22.8,80.9,22.5,79.8,21.8z M86.1,21.2
                                c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                c0.7,0.8,1.8,1.2,2.8,1.2C84.6,21.9,85.4,21.6,86.1,21.2L86.1,21.2z" />
                            <path fill="#FFFFFF" class="st0" d="M121.7,7.6c0.6,0.4,1.1,0.9,1.4,1.6c0.4,0.8,0.5,1.7,0.5,2.5v10.7h-2.5V12
                                c0-0.9-0.2-1.9-0.7-2.6c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.6,0.2-2.3,0.6c-0.8,0.4-1.5,1-2.1,1.7c0.1,0.3,0.1,0.7,0.1,1v10.7h-2.4V12
                                c0-0.9-0.2-1.9-0.7-2.6c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.5,0.2-2.2,0.6c-0.8,0.4-1.5,0.9-2.1,1.5v11.9h-2.5V7.4h0.8l1.2,2.6
                                c0.8-0.9,1.7-1.6,2.8-2.2c0.9-0.5,1.9-0.8,3-0.8c0.9,0,1.7,0.2,2.5,0.8c0.7,0.5,1.2,1.3,1.4,2.1c0.8-0.9,1.7-1.6,2.7-2.1
                                c0.9-0.5,1.9-0.7,2.9-0.7C120.4,7,121.1,7.2,121.7,7.6z" />
                            <path fill="#FFFFFF" class="st0" d="M130.5,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C133,22.8,131.7,22.5,130.5,21.8z M136.8,21.2
                                c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                c0.7,0.8,1.8,1.2,2.8,1.2C135.3,21.9,136.1,21.6,136.8,21.2L136.8,21.2z" />
                            <path fill="#FFFFFF" class="st0" d="M147.7,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C150.2,22.8,148.8,22.5,147.7,21.8z M154,21.2
                                c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                c0.7,0.8,1.8,1.2,2.8,1.2C152.5,21.9,153.3,21.6,154,21.2L154,21.2z" />
                            <path fill="#FFFFFF" class="st0" d="M175,0v22.5h-0.8l-1-2.4c-1.3,1.7-3.4,2.7-5.6,2.8c-2.4,0.1-4.7-1.3-5.6-3.6
                                c-1.1-2.6-1.1-5.6,0.1-8.3c0.5-1.2,1.4-2.2,2.5-2.9c1.1-0.7,2.4-1.1,3.7-1c1.5,0,3,0.5,4.1,1.5V0H175z M165.1,19.7
                                c0.9,1.1,2.2,1.7,3.6,1.7c0.7,0,1.3-0.2,1.9-0.5c0.7-0.3,1.3-0.8,1.9-1.3v-9.3c-0.4-0.7-1-1.4-1.7-1.8c-0.6-0.4-1.4-0.6-2.1-0.6
                                c-0.9,0-1.8,0.3-2.5,0.8c-0.8,0.6-1.4,1.4-1.7,2.3c-0.5,1.1-0.7,2.3-0.6,3.5C163.6,16.4,164.1,18.2,165.1,19.7z" />
                        </g>
                    </svg>
                </a>
            </div>
            <div class="flex w-4/12 justify-between sm:justify-end md:w-full md:pb-1 md:pt-5">
                <div class="flex sm:mr-0 w-66/100 md:w-80/100 2xs:w-full justify-end relative" x-data="{open: false}">
                    <input type="text" :class="{'w-full pl-5 pr-6 md:w-1/2': open}" class="search w-0 sm:w-9/12 border-b sm:py-2 sm:pl-5 sm:pr-6 xs:w-10/12 2xs:w-full border-gray-375 focus:outline-none pb-2 text-base font-medium transition-all duration-300 sm:bg-gray-175 sm:rounded-full sm:border-b-0" placeholder="Search">
                    <div class="absolute top-0 right-0 h-full flex items-center sm:pr-3">
                        <button class="w-6 h-6 cursor-pointer focus:outline-none" @click="open = !open">
                            <svg viewBox="0 0 192.904 192.904" style="enable-background:new 0 0 192.904 192.904;" xml:space="preserve">
                                <path class="fill-current text-gray-800" d="M190.707,180.101l-47.078-47.077c11.702-14.072,18.752-32.142,18.752-51.831C162.381,36.423,125.959,0,81.191,0
                                C36.422,0,0,36.423,0,81.193c0,44.767,36.422,81.187,81.191,81.187c19.688,0,37.759-7.049,51.831-18.751l47.079,47.078
                                c1.464,1.465,3.384,2.197,5.303,2.197c1.919,0,3.839-0.732,5.304-2.197C193.637,187.778,193.637,183.03,190.707,180.101z M15,81.193
                                C15,44.694,44.693,15,81.191,15c36.497,0,66.189,29.694,66.189,66.193c0,36.496-29.692,66.187-66.189,66.187
                                C44.693,147.38,15,117.689,15,81.193z" />
                            </svg>
                        </button>
                    </div>
                </div>
                <a href="/basket" class="block w-6 h-6 busket-button relative sm:hidden text-center">
                    <span class="quantity text-white absolute text-xs w-4 h-4 bg-red-600 rounded-full font-medium">6</span>
                    <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path class="fill-current text-gray-800" d="M443.188,442.208L415.956,142.56c-0.768-8.256-7.68-14.56-15.968-14.56h-48V96c0-25.728-9.952-49.888-28.032-67.968
                            C305.876,9.952,281.716,0,255.988,0c-52.928,0-96,43.072-96,96v32h-48c-8.288,0-15.2,6.304-15.936,14.56L68.82,442.208
                            c-1.632,17.856,4.384,35.712,16.48,48.96S114.612,512,132.564,512h246.88c17.952,0,35.168-7.584,47.264-20.832
                            S444.788,460.064,443.188,442.208z M191.988,96c0-35.296,28.704-64,64-64c17.184,0,33.28,6.624,45.344,18.656
                            c12.064,12.032,18.656,28.16,18.656,45.344v32h-128V96z M403.06,469.6c-6.144,6.688-14.528,10.4-23.648,10.4H132.564
                            c-9.088,0-17.504-3.712-23.616-10.432c-6.144-6.72-9.056-15.392-8.224-24.48L126.612,160h33.376v48c0,8.832,7.168,16,16,16
                            c8.832,0,16-7.168,16-16v-48h128v48c0,8.832,7.168,16,16,16c8.832,0,16-7.168,16-16v-48h33.376l25.92,285.12
                            C412.116,454.176,409.204,462.88,403.06,469.6z" />
                    </svg>
                </a>
                <a href="/favourites" class="block w-6 h-6 sm:hidden">
                    <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path class="fill-current text-gray-800" d="M376,30c-27.783,0-53.255,8.804-75.707,26.168c-21.525,16.647-35.856,37.85-44.293,53.268
                            c-8.437-15.419-22.768-36.621-44.293-53.268C189.255,38.804,163.783,30,136,30C58.468,30,0,93.417,0,177.514
                            c0,90.854,72.943,153.015,183.369,247.118c18.752,15.981,40.007,34.095,62.099,53.414C248.38,480.596,252.12,482,256,482
                            s7.62-1.404,10.532-3.953c22.094-19.322,43.348-37.435,62.111-53.425C439.057,330.529,512,268.368,512,177.514
                            C512,93.417,453.532,30,376,30z" />
                    </svg>
                </a>
                <a href="/account" class="block w-6 h-6 sm:hidden">
                    <svg viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path class="fill-current text-gray-800" d="M437.02,330.98c-27.883-27.882-61.071-48.523-97.281-61.018C378.521,243.251,404,198.548,404,148
                            C404,66.393,337.607,0,256,0S108,66.393,108,148c0,50.548,25.479,95.251,64.262,121.962
                            c-36.21,12.495-69.398,33.136-97.281,61.018C26.629,379.333,0,443.62,0,512h40c0-119.103,96.897-216,216-216s216,96.897,216,216
                            h40C512,443.62,485.371,379.333,437.02,330.98z M256,256c-59.551,0-108-48.448-108-108S196.449,40,256,40
                            c59.551,0,108,48.448,108,108S315.551,256,256,256z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div x-show="headerDropdown" class="blackout fixed top-0 bottom-0 right-0 left-0 z-40" x-cloak></div>
    <div x-show.transition.duration.300ms="headerDropdown" class="absolute z-40 bg-white w-full rounded-b-md" @click.away="headerDropdown = false" x-cloak>
        <div class="container">
            <div class="flex py-8">
                <div class="w-3/5 lg:w-2/3 l:w-full border-r-2 l:border-none border-gray-125 pr-10 lg:pr-5">
                    <div class="flex justify-between">
                        <div class="font-medium text-gray-800">
                            <h4 class="uppercase text-lg lg:text-base l:text-lg mb-2">Coats & Cloathing</h4>
                            <ul class="leading-7 lg:leading-6">
                                <li><a href="#">Shearling Coats</a></li>
                                <li><a href="#">Leather Jackets</a></li>
                                <li><a href="#">Fur Coats</a></li>
                                <li><a href="#">Wool Coats</a></li>
                                <li><a href="#">Fabric Jackets</a></li>
                                <li><a href="#">Capes & Ponchos</a></li>
                                <li><a href="#">Sweaters & Fleece</a></li>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Plus Sizes</a></li>
                            </ul>
                        </div>
                        <div class="font-medium text-gray-800">
                            <h4 class="uppercase text-lg lg:text-base l:text-lg mb-2">Style</h4>
                            <ul class="leading-7 lg:leading-6">
                                <li><a href="#">Short Jackets</a></li>
                                <li><a href="#">Mid-Length Coats</a></li>
                                <li><a href="#">Long Coats</a></li>
                                <li><a href="#">Hooded Coats</a></li>
                                <li><a href="#">Reversible Jackets</a></li>
                                <li><a href="#">Moto Jackets</a></li>
                                <li><a href="#">Bomber Jackets</a></li>
                                <li><a href="#">Fur-Trimmed Coats</a></li>
                            </ul>
                        </div>
                        <div class="font-medium text-gray-800">
                            <h4 class="uppercase text-lg lg:text-base l:text-lg mb-2">Accessories</h4>
                            <ul class="font-medium text-gray-800 leading-7 lg:leading-6">
                                <li><a href="#">Hats</a></li>
                                <li><a href="#">Scarves & Collars</a></li>
                                <li><a href="#">GlovesBags</a></li>
                                <li><a href="#">Wallets & Accessories</a></li>
                                <li><a href="#">Belts</a></li>
                            </ul>
                        </div>
                        <div class="uppercase font-medium text-lg lg:text-base l:text-lg text-gray-800">
                            <ul>
                                <li><a href="#">New arrivals</a></li>
                                <li><a href="#">Made in USA</a></li>
                                <li><a href="#">Sale</a></li>
                                <li><a href="#">Gift for her</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="w-2/5 pl-10 lg:pl-5 l:hidden">
                    <div class="flex">
                        <div class="w-1/2 flex flex-col justify-between">
                            <div class="relative mb-6">
                                <img src="/images/post-pic.jpg" alt="" class="w-full object-contain rounded-lg">
                                <a href="#" class="pic-title absolute text-white font-medium underline text-base">Scarf for her</a>
                            </div>
                            <div class="relative">
                                <img src="/images/post-pic.jpg" alt="" class="w-full object-contain rounded-lg">
                                <a href="#" class="pic-title absolute text-white font-medium underline text-base">New slippers</a>
                            </div>
                        </div>
                        <div class="w-1/2 pl-6">
                            <div class="relative">
                                <img src="/images/blog-inner-2.jpg" alt="" class="object-contain rounded-lg">
                                <a href="#" class="pic-title absolute text-white font-medium underline text-base">Furs 2020</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-show="mobMenu" class="blackout fixed top-0 h-screen w-screen z-50" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform opacity-0" x-transition:enter-end="transform opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform opacity-100" x-transition:leave-end="transform opacity-0" x-cloak>
        <div class="fixed top-0 overflow-y-scroll bg-white w-2/3 2sm:w-80/100 rounded-r-2xl h-screen z-50" x-show="mobMenu" @click.away="mobMenu = false; $dispatch('enable-scroll')" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform -translate-x-full" x-transition:enter-end="transform translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform -translate-x-full">
            <div class="p-8 xs:px-4 h-max relative">
                <div class="flex items-center justify-between pr-6 sm:pr-0 mb-10 w-full">
                    <div class="w-48 inline-block mx-6 md:mx-0 md:w-44 xs:w-40">
                        <a href="/" class="block">
                            <svg version="1.1" x="0px" y="0px" viewBox="0 0 181.2 36.5" style="enable-background:new 0 0 181.2 36.5;">
                                <rect x="95.6" width="85.6" height="36.5" />
                                <g transform="translate(0 5.168)">
                                    <path d="M2.6,0.7l7.2,15.6l0.6,1.2l0.5-1.4l6.9-15.4h2.5v21.7h-2.6V6.2l0.1-3l-7.7,17.2H9L1,3.3L1,5.2v17.2H0
                                        V0.7H2.6z" />
                                    <path d="M26.6,13.8c0,0.3-0.1,0.6-0.1,1c0,1.2,0.2,2.4,0.6,3.6c0.4,1,1,1.8,1.9,2.5c0.9,0.6,1.9,0.9,3,0.9
                                        c1,0,1.9-0.2,2.8-0.7c0.8-0.5,1.6-1.1,2.2-1.9l0.5,0.6C36.8,20.6,36,21.4,35,22c-1.1,0.6-2.4,0.9-3.6,0.8c-1.3,0-2.6-0.3-3.7-0.9
                                        c-1.1-0.6-2-1.5-2.5-2.7c-0.6-1.2-0.9-2.6-0.9-4c0-1.5,0.3-2.9,1-4.3c0.6-1.2,1.5-2.2,2.6-2.9C29,7.4,30.3,7,31.7,7
                                        C32.8,7,34,7.3,35,7.9c1,0.6,1.7,1.4,2.2,2.4c0.5,1.1,0.8,2.3,0.7,3.5L26.6,13.8L26.6,13.8z M29.2,8.5c-0.7,0.5-1.3,1.1-1.7,1.9
                                        c-0.5,0.9-0.8,1.8-0.9,2.8h8.8c0-1-0.2-2-0.6-2.9C34.5,9.6,34,9,33.4,8.5c-0.6-0.4-1.3-0.6-2-0.6C30.6,7.9,29.8,8.1,29.2,8.5z" />
                                    <path d="M48.8,7.2c0.4,0.1,0.8,0.3,1.1,0.5l-0.3,0.9C48.9,8.2,48.1,8,47.4,8c-1.4,0-2.6,0.8-3.7,2.5v12h-2.5
                                        V7.4H42l1.2,2.6c0.5-0.8,1.2-1.6,2-2.2C45.8,7.3,46.7,7,47.6,7C48,7,48.4,7.1,48.8,7.2z" />
                                    <path d="M53,3.6c-0.3-0.3-0.5-0.7-0.5-1.1c0-0.4,0.1-0.8,0.5-1C53.3,1.1,53.7,1,54.1,1c0.4,0,0.9,0.1,1.2,0.5
                                        c0.3,0.3,0.5,0.6,0.5,1c0,0.4-0.1,0.8-0.5,1.1C55,3.9,54.6,4,54.1,4C53.7,4,53.3,3.8,53,3.6z M52.9,7.4h2.5v15.1h-2.5V7.4z" />
                                    <path d="M70.9,7.6c0.7,0.4,1.2,0.9,1.6,1.6c0.4,0.8,0.5,1.7,0.5,2.5v10.7h-2.5V11.9c0.1-1-0.2-1.9-0.8-2.6
                                        c-0.6-0.6-1.5-1-2.3-0.9c-0.9,0-1.7,0.2-2.5,0.6c-0.8,0.4-1.6,1-2.3,1.6v11.8h-2.5V7.4h0.8l1.2,2.6c1.6-1.8,3.9-2.9,6.3-3
                                        C69.3,7,70.1,7.1,70.9,7.6z" />
                                    <path d="M79.8,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                        c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                        c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C82.3,22.8,80.9,22.5,79.8,21.8z M86.1,21.2
                                        c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                        c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                        c0.7,0.8,1.8,1.2,2.8,1.2C84.6,21.9,85.4,21.6,86.1,21.2L86.1,21.2z" />
                                    <path fill="#FFFFFF" class="st0" d="M121.7,7.6c0.6,0.4,1.1,0.9,1.4,1.6c0.4,0.8,0.5,1.7,0.5,2.5v10.7h-2.5V12
                                        c0-0.9-0.2-1.9-0.7-2.6c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.6,0.2-2.3,0.6c-0.8,0.4-1.5,1-2.1,1.7c0.1,0.3,0.1,0.7,0.1,1v10.7h-2.4V12
                                        c0-0.9-0.2-1.9-0.7-2.6c-0.5-0.6-1.2-0.9-2-0.9c-0.8,0-1.5,0.2-2.2,0.6c-0.8,0.4-1.5,0.9-2.1,1.5v11.9h-2.5V7.4h0.8l1.2,2.6
                                        c0.8-0.9,1.7-1.6,2.8-2.2c0.9-0.5,1.9-0.8,3-0.8c0.9,0,1.7,0.2,2.5,0.8c0.7,0.5,1.2,1.3,1.4,2.1c0.8-0.9,1.7-1.6,2.7-2.1
                                        c0.9-0.5,1.9-0.7,2.9-0.7C120.4,7,121.1,7.2,121.7,7.6z" />
                                    <path fill="#FFFFFF" class="st0" d="M130.5,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                        c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                        c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C133,22.8,131.7,22.5,130.5,21.8z M136.8,21.2
                                        c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                        c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                        c0.7,0.8,1.8,1.2,2.8,1.2C135.3,21.9,136.1,21.6,136.8,21.2L136.8,21.2z" />
                                    <path fill="#FFFFFF" class="st0" d="M147.7,21.8c-1.1-0.6-2.1-1.6-2.6-2.8c-0.7-1.3-1-2.7-1-4.1c0-1.5,0.4-2.9,1.1-4.2
                                        c0.7-1.2,1.6-2.1,2.8-2.8c1.1-0.6,2.4-1,3.7-1c1.4,0,2.7,0.3,3.9,1c1.1,0.6,2.1,1.6,2.6,2.8c0.6,1.3,1,2.7,1,4.1
                                        c0,1.5-0.4,2.9-1.1,4.2c-0.7,1.2-1.6,2.1-2.8,2.8c-1.1,0.6-2.4,1-3.7,1C150.2,22.8,148.8,22.5,147.7,21.8z M154,21.2
                                        c0.8-0.5,1.5-1.3,1.9-2.1c0.5-1.1,0.7-2.3,0.7-3.6c0-1.1-0.2-2.3-0.6-3.4c-0.3-1.1-0.9-2.1-1.7-2.9c-0.7-0.8-1.8-1.2-2.8-1.2
                                        c-0.8,0-1.6,0.3-2.3,0.7c-0.8,0.5-1.5,1.3-1.9,2.1c-0.5,1.1-0.7,2.3-0.7,3.6c0,1.2,0.2,2.3,0.6,3.4c0.4,1.1,1,2.1,1.7,3
                                        c0.7,0.8,1.8,1.2,2.8,1.2C152.5,21.9,153.3,21.6,154,21.2L154,21.2z" />
                                    <path fill="#FFFFFF" class="st0" d="M175,0v22.5h-0.8l-1-2.4c-1.3,1.7-3.4,2.7-5.6,2.8c-2.4,0.1-4.7-1.3-5.6-3.6
                                        c-1.1-2.6-1.1-5.6,0.1-8.3c0.5-1.2,1.4-2.2,2.5-2.9c1.1-0.7,2.4-1.1,3.7-1c1.5,0,3,0.5,4.1,1.5V0H175z M165.1,19.7
                                        c0.9,1.1,2.2,1.7,3.6,1.7c0.7,0,1.3-0.2,1.9-0.5c0.7-0.3,1.3-0.8,1.9-1.3v-9.3c-0.4-0.7-1-1.4-1.7-1.8c-0.6-0.4-1.4-0.6-2.1-0.6
                                        c-0.9,0-1.8,0.3-2.5,0.8c-0.8,0.6-1.4,1.4-1.7,2.3c-0.5,1.1-0.7,2.3-0.6,3.5C163.6,16.4,164.1,18.2,165.1,19.7z" />
                                </g>
                            </svg>
                        </a>
                    </div>
                    <button class="flex justify-center text-center focus:outline-none transition-transform duration-200 ease" @click="mobMenu = false; $dispatch('enable-scroll')">
                        <svg class="w-4 h-auto" viewBox="0 0 20.866 20.866">
                            <rect width="27.091" height="2.419" rx="1.209" transform="translate(19.156 20.866) rotate(-135)" fill="#2a2a2e" />
                            <rect width="27.091" height="2.419" rx="1.209" transform="translate(20.866 1.71) rotate(135)" fill="#2a2a2e" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-col border-b-2 border-gray-125 pb-10 mb-10 mr-10">
                    <div class="mb-8" x-data="{categories: false}">
                        <div class="flex justify-between items-center" @click="categories = !categories">
                            <a href="#" class="flex">
                                <span class="mr-5">
                                    <img src="{{ asset('/images/icons/catalog.svg') }}" alt="">
                                </span>
                                <span class="font-medium text-lg xs:text-base">Catalog</span>
                            </a>
                            <a href="#" class="block transition duration-500 ease-in-out" :class="{'transform rotate-180': !categories}">
                                <img src="{{ asset('/images/icons/list.svg') }}" alt="">
                            </a>
                        </div>
                        <div x-show.transition.duration.500ms="categories" class="pl-5 pt-5">
                            <ul>
                                <li class="mb-3">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">
                                            <img src="{{ asset('/images/icons/sheet.svg') }}" alt="">
                                        </span>
                                        <span class="font-medium text-base xs:text-sm text-gray-350">Woman</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">
                                            <img src="{{ asset('/images/icons/sheet.svg') }}" alt="">
                                        </span>
                                        <span class="font-medium text-base xs:text-sm text-gray-350">Man</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">
                                            <img src="{{ asset('/images/icons/sheet.svg') }}" alt="">
                                        </span>
                                        <span class="font-medium text-base xs:text-sm text-gray-350">Kids</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">
                                            <img src="{{ asset('/images/icons/sheet.svg') }}" alt="">
                                        </span>
                                        <span class="font-medium text-base xs:text-sm text-gray-350">Slippers</span>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="flex items-center">
                                        <span class="mr-2">
                                            <img src="{{ asset('/images/icons/sheet.svg') }}" alt="">
                                        </span>
                                        <span class="font-medium text-base xs:text-sm text-gray-350">Accessories</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="#" class="flex mb-8">
                        <span class="mr-5">
                            <img src="{{ asset('/images/icons/sale.svg') }}" alt="">
                        </span>
                        <span class="font-medium text-lg xs:text-base">Sale</span>
                    </a>
                    <a href="#" class="flex mb-8">
                        <span class="mr-5">
                            <img src="{{ asset('/images/icons/gift.svg') }}" alt="">
                        </span>
                        <span class="font-medium text-lg xs:text-base">Gifts</span>
                    </a>
                    <a href="/posts" class="flex">
                        <span class="mr-5">
                            <img src="{{ asset('/images/icons/blog.svg') }}" alt="">
                        </span>
                        <span class="font-medium text-lg xs:text-base">Blog</span>
                    </a>
                </div>
                <div class="flex flex-col border-b-2 border-gray-125 pb-10 mb-10 mr-10">
                    <h4 class="font-medium text-lg xs:text-base mb-3">Important</h4>
                    <ul>
                        <li class="mb-2"><a href="/faq" class="font-medium text-sm xs:text-xs text-gray-350">Question-Answer</a></li>
                        <li class="mb-2"><a href="#" class="font-medium text-sm xs:text-xs text-gray-350">Track & Order</a></li>
                        <li class="mb-2"><a href="#" class="font-medium text-sm xs:text-xs text-gray-350">Delivery & Refunds</a></li>
                        <li class="mb-2"><a href="#" class="font-medium text-sm xs:text-xs text-gray-350">Corporate Responsibility</a></li>
                        <li class="mb-2"><a href="#" class="font-medium text-sm xs:text-xs text-gray-350">About Us</a></li>
                        <li class="mb-2"><a href="#" class="font-medium text-sm xs:text-xs text-gray-350">Contacts</a></li>
                    </ul>
                </div>
                <div class="flex items-center">
                    <a href="/login" class="font-medium text-lg xs:text-base underline mr-5">Log In</a>
                    <span class="text-xs text-gray-350 mr-5">or</span>
                    <a href="/register" class="font-medium text-lg xs:text-base underline">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</header>