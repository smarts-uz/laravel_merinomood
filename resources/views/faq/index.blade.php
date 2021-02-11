<x-layouts.master>
    <div id="faq">
        <div class="container pt-8">
            <div
                class="breadcrumbs py-4 mb-20 xs:mb-10 flex justify-between items-center shadow-4lg xs:shadow-none px-8 xs:px-0">
                <div class="flex items-center font-medium text-sm">
                    <a href="/" class="text-gray-200 font-medium text-sm mr-4">Home</a>
                    <span class="mr-4">
                        <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px"
                             viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                             xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                                L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                                c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                        </svg>
                    </span>
                    <a href="/faq" class="text-gray-750 font-medium text-sm">Faq</a>
                </div>
                <a href="#" class="text-sm font-medium text-gray-225">U need help?</a>
            </div>
        </div>
        <div class="border-t-4 border-orange-350 mb-3">
            <div class="container relative h-12">
                <div class="faq-title py-3 px-4 bg-white absolute top-0 left-0">
                    <h1 class="text-5xl font-bold text-gray-800 leading-none font-bebas uppercase">Faq</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="text-2xl font-medium text-gray-700 text-center xs:text-left mb-5">How we can help you?</h2>
            <div class="flex relative pl-12 pr-3 shadow-4lg rounded-lg w-7/12 xs:w-full m-auto py-2 mb-12 xs:mb-6">
                <input type="text" class="w-10/12 focus:outline-none pl-5">
                <button
                    class="font-medium text-lg xs:text-base bg-gray-700 text-white py-2 px-5 rounded-lg ml-10 focus:outline-none">
                    Search
                </button>
                <div class="search-icon absolute top-0 left-0 pl-5 cursor-pointer">
                    <svg viewBox="0 0 20 20" class="w-8 h-8">
                        <path d="M19.772,18.673l-4.881-4.881a8.43,8.43,0,1,0-1.1,1.1l4.881,4.881a.778.778,0,1,0,1.1-1.1ZM1.555,8.418A6.862,
                      6.862,0,1,1,8.418,15.28,6.87,6.87,0,0,1,1.555,8.418Z" fill="#7e7e7e"/>
                    </svg>
                </div>
            </div>
            <p class="font-medium text-base xs:text-sm text-gray-200 text-center xs:text-left mb-6 xs:mb-8">or choose a
                category to quickly find the help you need</p>

            {{-- Categories --}}
            <div class="flex flex-wrap xs:flex-wrap justify-evenly sm:justify-between px-5 xs:px-0 mb-16">
                @foreach($faqCategories as $category)
                    <a href="{{ $category->path() }}"
                       class="flex flex-col justify-center items-center w-22/100 xs:w-47/100 py-12 mt-10 xs:mb-5 rounded-lg border-2 border-transparent shadow-4lg {{ $category->is($activeCategory) ? 'border-orange-350' : '' }}">
                        <img class="w-1/2 h-10 object-contain"
                             src="/storage/{{ $category->image }}"
                             alt="{{ $category->name }}"/>
                        <h2 class="text-base font-medium text-gray-700">{{ $category->name }}</h2>
                    </a>
                @endforeach
            </div>
            {{-- //Categories --}}

            {{-- Q & A--}}
            @isset($activeCategory)
                <p class="text-base font-medium text-gray-200 text-center mb-5">You can also browse the topics below to
                    find </p>
                <h2 class="text-2xl font-medium text-gray-700 text-center mb-12">What you are looking for</h2>
                <div class="flex sm:flex-col">
                    <div class="w-5/12 sm:w-full pr-4 sm:pr-0">
                        @foreach($activeCategory->questions as $question)
                            <div>
                                <a href="{{ $question->path() }}"
                                   class="text-base font-medium py-3 pl-5 pr-8 bg-gray-125 inline-block w-full relative mb-2 {{ $question->is($activeQuestion) ? 'text-white bg-gray-300' : 'bg-gray-125'}}">
                                    <h2>{{ $question->name }}</h2>
                                    <span class="absolute top-0 right-0 pr-3 h-full flex items-center">
                                        <svg viewBox="0 0 6.001 10.214"
                                             class="w-4 h-3 {{ $question->is($activeQuestion) ? 'transform rotate-90' : ''}}">
                                            <path class="fill-current" d="M107.316,4.708,102.77.163a.56.56,0,0,0-.79,0L101.645.5a.559.559,
                                                  0,0,0,0,.79L105.462,5.1l-3.821,3.821a.56.56,0,0,0,0,.79l.335.335a.56.56,0,0,0,.79,0L107.316,5.5a.564.564,0,0,0,0-.793Z"
                                                  transform="translate(-101.478)" fill="#fff"/>
                                        </svg>
                                    </span>
                                </a>
                                @if($question->is($activeQuestion))
                                    <div class="w-full hidden sm:block mb-2">
                                        <div class="bg-gray-125 px-5 pt-3 pb-10">
                                            <h2 class="text-xl font-medium text-gray-700 mb-4">{{ $question->name }}</h2>
                                            {!! $question->answer !!}
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    @isset($activeQuestion)
                        <div class="w-7/12 sm:hidden">
                            <div class="bg-gray-125 px-5 pt-3 pb-10">
                                <h2 class="text-xl font-medium text-gray-700 mb-4">
                                    {{ $activeQuestion->name }}
                                </h2>
                                <div class="text-sm text-gray-200 flex flex-col mb-4">
                                    {!! $activeQuestion->answer !!}
                                </div>
                            </div>
                        </div>
                    @endisset
                </div>
            @endisset
            {{-- //Q & A --}}

            <div class="w-5/12 sm:w-full mb-32 sm:mb-20">
                <div class="mb-10">
                    <h2 class="text-2xl font-medium text-gray-700 ml-3 mb-2">Extension questions</h2>
                    <p class="text-base text-gray-200 font-medium mb-5">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo consequat. </p>
                    <a href="#" class="text-base text-blue-500 font-medium underline">Read more >></a>
                </div>
                <div class="sm:w-full">
                    <h2 class="text-2xl font-medium text-gray-700 ml-3 mb-2">Contact Support</h2>
                    <p class="text-base text-gray-200 font-medium mb-5">Think we didn't answer your questions correctly
                        or you still have other arreas we didn't cover?</p>
                    <p class="text-base text-gray-200 font-medium mb-5">Why don't you call us</p>
                    <ul class="mb-10">
                        <li class="text-base font-medium text-gray-375">+996 (701) 16-5555</li>
                        <li class="text-base font-medium text-gray-375">+996 (701) 16-5555</li>
                        <li class="text-base font-medium text-gray-375">+996 (701) 16-5555</li>
                    </ul>
                    <p class="text-sm text-gray-200 mb-12">Hours of Support: Mon-Fri 10am EST – 7pm EST, Saturday 10am
                        EST – 6:30pm EST</p>
                    <a href="#"
                       class="block w-9/12 3xs:w-full py-4 sm:mx-auto text-lg text-center font-medium text-white bg-black leading-none focus:outline-none">Write
                        To Technical Support</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
