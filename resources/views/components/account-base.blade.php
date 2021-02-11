<x-layouts.master>
    <div x-data="{ menu:false }">
        <div class="container pt-8">
            <div class="breadcrumbs py-4 mb-20 xs:mb-10 shadow-4lg xs:shadow-none flex justify-between items-center px-8 xs:px-0">
                <div class="flex items-center font-medium text-sm">
                    <a href="/" class="text-gray-200 font-medium text-sm mr-4">Home</a>
                    <span class="mr-4">
                        <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px" viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;" xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                        L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                        c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z" />
                        </svg>
                    </span>
                    <span class="text-gray-750 font-medium text-sm">My Account</span>
                </div>
                <a href="#" class="text-sm font-medium text-gray-225">U need help?</a>
            </div>
        </div>
        <div class="border-t-4 border-orange-350 mb-3 xs:mb-0">
            <div class="container relative h-12">
                <div class="account-title py-3 px-4 sm:px-3 xs:px-2 bg-white absolute top-0 left-0">
                    <h2 class="text-5xl xs:text-4xl font-bold text-gray-800 leading-none font-bebas">My Account</h2>
                </div>
                <div class="mob-burger hidden sm:block py-3 px-4 sm:px-3 xs:px-2 bg-white absolute top-0 right-0">
                    <button class="focus:outline-none" @click="menu = !menu">
                        <svg width="27.091" height="16.419" viewBox="0 0 27.091 16.419">
                            <g transform="translate(0 2)">
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(0 5)" fill="#2f3036"></rect>
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(0 12)" fill="#2f3036"></rect>
                                <rect width="27.091" height="2.419" rx="1.209" transform="translate(27.091 0.419) rotate(180)" fill="#2f3036"></rect>
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div x-show="!menu">
            <div class="container flex pb-16">
                <div class="w-4/12 sm:hidden">
                    <div class="border-r-2 border-gray-250 py-5 pl-24 lg:pl-10 l:pl-0 pr-20 l:pr-10">
                        <x-account-menu></x-account-menu>
                    </div>
                </div>
                {{ $slot }}
            </div>
        </div>
        <div x-show="menu">
            <div class="container mb-10">
                <x-account-menu></x-account-menu>
            </div>
        </div>
    </div>
</x-layouts.master>