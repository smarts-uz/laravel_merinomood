<x-layouts.master>
    <div id="wishlist">
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
            <div class="w-10/12 m-auto sm:w-full">
                <x-layouts.account>
                    <livewire:wishlist/>
                </x-layouts.account>
            </div>
        </div>
    </div>
</x-layouts.master>
