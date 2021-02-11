<x-layouts.master>
    <div id="faq">
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
                    <span class="text-gray-750 font-medium text-sm">Faq</span>
                </div>
            </div>
            <div>
                <div class="relative w-9/12 xl:w-10/12 sm:w-full m-auto px-8 xs:px-0 py-10 xs:pt-20 xs:pb-16 rounded-lg xs:rounded-none border-2 xs:border-0 xs:border-t-2 xs:border-b-2 border-gray-450 mb-12 xs:mb-24 flex flex-wrap">
                    <div class="title absolute">
                        <h1 class="bg-white px-3 text-3xl text-gray-750">Help</h1>
                    </div>
                    @foreach($faqCategories as $faqCategory)
                        <div class="w-4/12 lg:w-1/2 xs:w-full pr-4 xs:pr-0 mb-6">
                            <div class="px-5 py-10 text-center rounded-lg bg-gray-75 flex flex-col">
                                <h2 class="text-xl font-medium text-gray-750 mb-2">{{ $faqCategory->name }}</h2>
                                @foreach($faqCategory->questions->take(3) as $question)
                                    <a href="/faq/{{ $faqCategory->slug }}/{{ $question->slug }}"
                                       class="text-sm text-gray-520 font-medium mb-1">{{ $question->name }}</a>
                                @endforeach
                                @if($faqCategory->questions_count > 3)
                                    <a href="/faq/{{ $faqCategory->slug }}/{{ $faqCategory->questions[3]->slug }}"
                                       class="text-sm text-gray-520 font-medium mb-1 underline">View all</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
