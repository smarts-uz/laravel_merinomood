<x-layouts.master>
    <div id="bonus">
        <div class="container sm:px-0">
            <div class="breadcrumbs py-6 mb-10 sm:mx-5 border-b-2 border-gray-450 xsm:hidden">
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
                    <div class="title absolute">
                        <h1 class="bg-white px-3 text-3xl text-gray-750">My bonus</h1>
                    </div>
                    <div class="sm:px-5 sm:overflow-scroll">
                        <div class="bonuses-block 2xs:pr-5">
                            <div class="flex mb-5 pt-12 lg:flex-col sm:flex-row">
                                <div class="bg-green-350 border-2 border-green-700 rounded-lg w-4/12 x:w-5/12 lg:w-full sm:w-4/12 xs:w-5/12 2xs:w-4/12 lg:mb-5 sm:mb-0 pl-5 py-5 mr-3">
                                    <h2 class="text-lg text-white font-medium">My Bonus Score</h2>
                                    <p class="text-4xl font-black text-white">${{ Auth::user()->bonus_points['total_points'] }}</p>
                                </div>
                                <div class="w-8/12 x:w-7/12 sm:w-8/12 xs:w-7/12 2xs:w-8/12 lg:w-full bg-gray-50 border-2 border-gray-450 rounded-lg px-5 py-5">
                                    <p class="text-sm font-medium text-gray-520">
                                        Funds held on Your balance, including blocked amounts f you want to learn more
                                        about how they work or get bonuses, look
                                        <a href="#" class="text-blue-700 text-base font-medium underline"> Here</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex mb-4 lg:flex-col sm:flex-row">
                                <div class="bg-red-250 border-2 border-red-550 rounded-lg w-4/12 x:w-5/12 sm:w-4/12 xs:w-5/12 2xs:w-4/12 lg:w-full lg:mb-5 sm:mb-0 pl-5 py-5 mr-3">
                                    <h2 class="text-lg text-white font-medium">Blocked Bonuses</h2>
                                    <p class="text-4xl font-black text-white">${{ Auth::user()->bonus_points['blocked_points'] }}</p>
                                </div>
                                <div class="w-8/12 x:w-7/12 sm:w-8/12 xs:w-7/12 2xs:w-8/12 lg:w-full bg-gray-50 border-2 border-gray-450 rounded-lg px-5 py-5">
                                    <p class="text-sm font-medium text-gray-520">
                                        Temporarily reserved amounts for completed transactions until the moment of
                                        confirmation or rejection of the operation, more details
                                        <a href="#" class="text-blue-700 text-base font-medium underline"> Here</a>
                                    </p>
                                </div>
                            </div>
                            <div class="flex lg:flex-col sm:flex-row">
                                <div class="bg-orange-250 border-2 border-orange-450 rounded-lg w-4/12 x:w-5/12 sm:w-4/12 xs:w-5/12 2xs:w-4/12 lg:w-full lg:mb-5 sm:mb-0 pl-5 py-5 mr-3">
                                    <h2 class="text-lg text-white font-medium">Available Balance</h2>
                                    <p class="text-4xl font-black text-white">${{ Auth::user()->bonus_points['available_points'] }}</p>
                                </div>
                                <div class="w-8/12 x:w-7/12 sm:w-8/12 xs:w-7/12 2xs:w-8/12 lg:w-full bg-gray-50 border-2 border-gray-450 rounded-lg px-5 py-5">
                                    <p class="text-sm font-medium text-gray-520">
                                        The available amount of money on Your balance except for the reserved amount
                                        and bonuses, more details
                                        <a href="#" class="text-blue-700 text-base font-medium underline"> Here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @slot('footer')
                        <div class="bg-gray-75 px-5 pt-7 pb-9 md:mb-12 2xs:mb-0 sm:mx-5 2sm:mx-0">
                            <p class="text-base font-medium text-gray-520 leading-tight">If You Don't Understand Something About The Bonus System? It Doesn't Matter, You Can Look In
                                The "Questions And Answers", <a href="#" class="text-blue-700 text-base font-medium underline">There</a>
                                Everything Is Painted In Detail</p>
                        </div>
                    @endslot
                </x-layouts.account>
            </div>
        </div>
    </div>
</x-layouts.master>
