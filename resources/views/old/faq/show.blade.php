<x-layouts.master>
    <div id="faq-inner">
        <div class="container">
            <div class="breadcrumbs py-6 mb-10 border-b-2 border-gray-450 xsm:hidden">
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
                    <a href="/faq" class="text-gray-750 font-medium text-sm">Faq</a>
                </div>
            </div>
            <div class="w-10/12 lg:w-full m-auto">
                <x-faq :faq-categories="$faqCategories" :active-question="$activeQuestion">
                    <div class="title absolute text-center">
                        <h1 class="bg-white px-3 text-3xl text-gray-750">{{ $activeQuestion->faqCategory->name }}</h1>
                    </div>
                    <h3 class="text-sm font-medium text-gray-520 pt-6 mb-7 xs:ml-7">{{ $activeQuestion->name }}</h3>
                    <div class="bg-gray-75 rounded-lg px-8 3xs:px-5 py-10 text-gray-520 font-medium">
                        <div class="prose-sm">
                            {!! $activeQuestion->answer !!}
                        </div>
                    </div>
                </x-faq>
            </div>
        </div>
    </div>
</x-layouts.master>
