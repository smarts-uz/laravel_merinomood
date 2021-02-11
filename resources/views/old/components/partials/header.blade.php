<header>
    <div x-data="{ headerDropdown: false, catalogMenu: false, search: false, mobileMenu: false}"
         class="relative {{ isset($page) && $page === 'home' ? '' : 'h-26'}}">
        <div class="w-full transition-colors duration-150 ease-in-out absolute z-50 sm:z-40
                {{ isset($page) && $page === 'home' ? 'text-white' : 'text-gray-850'}}"
             :class="{'header-dropdown-active': headerDropdown}">
            <div class="container py-6 flex justify-between items-center xs:py-2">
                <div class="w-56 xs:w-40 leading-none">
                    <button class="focus:outline-none nav-item sm:hidden"
                            :class="{'nav-active': search}" @click="headerDropdown = true; search = true; catalogMenu = false">
                        <svg class="fill-current" width="27" height="26.956" viewBox="0 0 27 26.956">
                            <defs>
                                <clipPath id="search-clip-path">
                                    <path
                                        d="M3.2,18.667A10.947,10.947,0,1,1,18.7,3.2a10.712,10.712,0,0,1,1.648,13.2.459.459,0,0,0,.064.548L26,22.528c1.113,1.111,1.377,2.664.391,3.649l-.17.169c-.987.985-2.542.721-3.655-.39l-5.578-5.569a.468.468,0,0,0-.561-.075A10.756,10.756,0,0,1,3.2,18.667Zm13.471-2.019a8.089,8.089,0,1,0-11.448,0A8.082,8.082,0,0,0,16.675,16.648Z"
                                        transform="translate(-0.001 0)"/>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#search-clip-path)">
                                <g transform="translate(0.022)">
                                    <g>
                                        <path
                                            d="M26.792,25.2l-7.831-7.831a10.692,10.692,0,1,0-1.588,1.588L25.2,26.792a.562.562,0,0,0,.794,0L26.792,26A.562.562,0,0,0,26.792,25.2ZM10.67,19.094a8.424,8.424,0,1,1,8.424-8.424A8.433,8.433,0,0,1,10.67,19.094Z"
                                            transform="translate(0 0)"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </button>
                    <button class="hidden sm:block" @click="mobileMenu = true; headerDropdown = true; document.querySelector('html').classList.add('overflow-hidden')">
                        <svg class="w-7 xs:w-6 2xs:w-5 fill-current" viewBox="0 0 27.091 11.419">
                            <g id="Component_9_84" data-name="Component 9 – 84" transform="translate(0)">
                                <rect id="Rectangle_18" data-name="Rectangle 18" width="27.091" height="2.419" rx="1.209" transform="translate(0 9)" />
                                <rect id="Rectangle_19" data-name="Rectangle 19" width="27.091" height="2.419" rx="1.209" transform="translate(27.091 2.419) rotate(180)" />
                            </g>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul class="flex items-center">
                        <li class="px-6 font-medium lg:px-4 sm:hidden">
                            <button class="focus:outline-none nav-item"
                                    :class="{'nav-active': catalogMenu}"
                                    @click="headerDropdown = true; catalogMenu = true; search = false">Catalog
                            </button>
                        </li>
                        <li class="px-6 font-medium lg:px-4 sm:hidden"><a href="/posts">Blog</a></li>
                        <li class="px-12 lg:px-10 md:px-6">
                            <a href="/">
                                <svg class="fill-current lg:w-32 2xs:w-24" width="145" height="56" viewBox="0 18 145 56">
                                    <text transform="translate(0 73)" font-size="73" font-family="Winglet">
                                        <tspan x="0" y="0">MERINOMOOD</tspan>
                                    </text>
                                </svg>
                            </a>
                        </li>
                        <li class="px-6 font-medium lg:px-4 sm:hidden"><a href="/account/wishlist">Wishlist</a></li>
                        <li class="px-6 font-medium lg:px-4 sm:hidden"><a href="#">Shipping</a></li>
                    </ul>
                </div>
                <div class="w-56 xs:w-40">
                    <ul class="flex justify-end items-center">
                        <li class="pr-6 xs:pr-4">
                            <button class="focus:outline-none hidden sm:block">
                                <svg class="fill-current w-7 xs:w-6 2xs:w-5" width="27" height="26.956" viewBox="0 0 27 26.956">
                                    <defs>
                                        <clipPath id="search-clip-path">
                                            <path
                                                    d="M3.2,18.667A10.947,10.947,0,1,1,18.7,3.2a10.712,10.712,0,0,1,1.648,13.2.459.459,0,0,0,.064.548L26,22.528c1.113,1.111,1.377,2.664.391,3.649l-.17.169c-.987.985-2.542.721-3.655-.39l-5.578-5.569a.468.468,0,0,0-.561-.075A10.756,10.756,0,0,1,3.2,18.667Zm13.471-2.019a8.089,8.089,0,1,0-11.448,0A8.082,8.082,0,0,0,16.675,16.648Z"
                                                    transform="translate(-0.001 0)"/>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#search-clip-path)">
                                        <g transform="translate(0.022)">
                                            <g>
                                                <path
                                                        d="M26.792,25.2l-7.831-7.831a10.692,10.692,0,1,0-1.588,1.588L25.2,26.792a.562.562,0,0,0,.794,0L26.792,26A.562.562,0,0,0,26.792,25.2ZM10.67,19.094a8.424,8.424,0,1,1,8.424-8.424A8.433,8.433,0,0,1,10.67,19.094Z"
                                                        transform="translate(0 0)"/>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </li>
                        <li class="pr-10 font-medium lg:pr-6 sm:pr-0">
                            <livewire:header-basket/>
                        </li>
                        <li class="leading-none relative flex items-center sm:hidden">
                            <button x-show.transition.opacity="headerDropdown"
                                    class="header-cross absolute w-7 flex justify-center text-center
                                        focus:outline-none transition-transform duration-200 ease"
                                    :class="{'z-50': headerDropdown}"
                                    @click="catalogMenu = false; headerDropdown = false; search = false">
                                <svg width="20.866" height="20.866" viewBox="0 0 20.866 20.866">
                                    <rect width="27.091" height="2.419" rx="1.209"
                                          transform="translate(19.156 20.866) rotate(-135)" fill="#2a2a2e"/>
                                    <rect width="27.091" height="2.419" rx="1.209"
                                          transform="translate(20.866 1.71) rotate(135)" fill="#2a2a2e"/>
                                </svg>
                            </button>
                            <a href="/account" class="w-7 focus:outline-none transition-opacity duration-200"
                                    :class="{'opacity-0': headerDropdown}">
                                <svg class="fill-current" width="27.091" height="27.091"
                                     viewBox="0 0 27.091 27.091">
                                    <g transform="translate(0)">
                                        <path
                                            d="M23.123,17.513a13.493,13.493,0,0,0-5.147-3.229,7.831,7.831,0,1,0-8.861,0A13.567,13.567,0,0,0,0,27.091H2.116a11.429,11.429,0,1,1,22.858,0h2.116A13.457,13.457,0,0,0,23.123,17.513Zm-9.578-3.967A5.714,5.714,0,1,1,19.26,7.831,5.721,5.721,0,0,1,13.545,13.545Z"
                                            transform="translate(0)"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div x-show.transition.duration.200ms="headerDropdown" class="w-full pt-4 pb-10 font-medium sm:hidden">
                <div x-show="catalogMenu" class="container flex">
                    <div class="catalog-list w-3/4">
                        @foreach($categories as $category)
                            <div class="mb-6">
                                <a href="/catalog/{{ $category->slug }}" class="text-gray-520 text-sm mb-1">{{ $category->name }}</a>
                                <ul>
                                    @foreach($category->children as $child)
                                        <li>
                                            <a class="text-gray-850 leading-loose hover:underline"
                                               href="/catalog/{{ $category->slug . '/' . $child->slug }}">{{ $child->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                    @isset($catalogBanner)
                        <div class="w-1/4 ml-2">
                            <div class="relative mb-5">
                                <img class="w-full" src="{{ '/storage/' . $catalogBanner->image }}" alt="{{ $catalogBanner->title }}">
                                <div
                                        class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white">
                                    <h3 class="text-4xl">{{ $catalogBanner->title }}</h3>
                                    <a class="text-xl" href="{{ $catalogBanner->link }}">View now</a>
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
                <div x-show="search" class="container flex justify-center">
                    <input class="placeholder-gray-850 w-full text-center text-xl font-medium search-form text-gray-850 px-6 bg-transparent" type="text" placeholder="Search">
                </div>
            </div>
        </div>
        <div x-show.transition.duration.200ms="mobileMenu" x-cloak class="overflow-y-scroll bg-white w-70/100 h-screen fixed left-0 top-0 z-50 mobile-menu">
            <div class="pt-6 xs:pt-4 pb-8 h-max">
                <div class="flex items-center px-6 xs:px-4 mb-4">
                    <button class="header-cross w-4 flex justify-center text-center mr-16
                                        focus:outline-none transition-transform duration-200 ease"
                            @click="headerDropdown = false; mobileMenu = false; document.querySelector('html').classList.remove('overflow-hidden')">
                        <svg class="w-full h-full" viewBox="0 0 20.866 20.866">
                            <rect width="27.091" height="2.419" rx="1.209"
                                  transform="translate(19.156 20.866) rotate(-135)" fill="#2a2a2e"/>
                            <rect width="27.091" height="2.419" rx="1.209"
                                  transform="translate(20.866 1.71) rotate(135)" fill="#2a2a2e"/>
                        </svg>
                    </button>
                    <a href="/">
                        <svg class="fill-current lg:w-32 2xs:w-24" width="145" height="56" viewBox="0 18 145 56">
                            <text transform="translate(0 73)" font-size="73" font-family="Winglet">
                                <tspan x="0" y="0">MERINOMOOD</tspan>
                            </text>
                        </svg>
                    </a>
                </div>
                <div class="flex flex-col py-4">
                    <div class="px-8 xs:px-6 mb-4 relative menu-item active">
                        <a class="text-lg xs:text-base font-medium text-gray-750" href="/posts">Home page</a>
                    </div>
                    <div class="px-8 xs:px-6 mb-4 relative menu-item">
                        <a class="text-lg xs:text-base font-medium text-gray-750" href="/posts">Blog</a>
                    </div>
                    <div class="px-8 xs:px-6 mb-4 relative menu-item" x-data="{catalog: false}">
                        <button class="xs:text-base focus:outline-none text-lg font-medium text-gray-750" @click="catalog = !catalog">Catalog</button>
                        <div class="mobile-menu-categories py-3 pl-3" x-show="catalog">
                            @foreach($categories as $category)
                                <x-categories-tree-main :category="$category" :parent-categories="$parentCategories"/>
                            @endforeach
                        </div>
                    </div>
                    <div class="px-8 xs:px-6 py-6 mb-4">
                        <ul>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">Question-Answer</a></li>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">Track An Order</a></li>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">Delivery And Refunds</a></li>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">Corporate Responsibility</a></li>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">About Us</a></li>
                            <li class="text-sm font-medium text-gray-520 mb-2 xs:text-xs"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="px-8 xs:px-6 mb-4 relative menu-item">
                        <a class="text-xl xs:text-base font-medium text-gray-750" href="#">Wishlist</a>
                    </div>
                    <div class="px-8 xs:px-6 mb-4">
                        <a href="#"><span class="text-xl xs:text-base font-medium text-gray-750">Shopping bag (0)</span></a>
                    </div>
                    <div class="flex px-8 xs:px-6 mb-4">
                        <a class="text-lg text-orange-450 text-underline xs:text-base font-medium" href="{{ route('login') }}">Sign in</a>
                        <p class="text-lg text-gray-550 px-4 xs:text-base font-medium">or</p>
                        <a class="text-lg text-orange-450 text-underline xs:text-base font-medium" href="{{ route('register') }}">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="headerDropdown" x-cloak
             class="blackout fixed top-0 bottom-0 left-0 right-0 z-40"
             @click="catalogMenu = false; headerDropdown = false; search = false; mobileMenu = false; document.querySelector('html').classList.remove('overflow-hidden')"
        >
        </div>
    </div>
</header>
