<x-layouts.master>
    <div id="post">
        <nav class="pt-8 mb-12">
            <div class="container">
                <div class="flex items-center font-medium text-sm xs:text-xs">
                    <a href="/" class="text-gray-200 font-medium mr-4">Home</a>
                    <span class="mr-4">
                        <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px"
                             viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                             xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                        </svg>
                    </span>
                    <a href="/posts" class="text-gray-200 font-medium mr-4">Posts</a>
                    <span class="mr-4">
                        <svg class="w-2 h-2 fill-current text-gray-200" width="451.846px" height="451.847px"
                             viewBox="0 0 451.846 451.847" style="enable-background:new 0 0 451.846 451.847;"
                             xml:space="preserve">
                            <path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
                            L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
                            c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"/>
                        </svg>
                    </span>
                    <span class="text-gray-750 font-medium truncate">{{ $post->title }}</span>
                </div>
            </div>
        </nav>
        <section class="mb-10 font-okta">
            <div class="container">
                <div class="flex justify-center mb-10 xs:justify-center">
                    <div class="relative w-5/6 xs:w-auto">
                        <div class="post-img relative">
                            <img class="rounded-lg xs:object-cover" src="{{ Storage::url($post->banner) }}" alt="">
                        </div>
                        <div class="w-full z-20 absolute bottom-0 left-0 rounded-b-lg py-2 px-4 xs:px-2 s:pb-1">
                            <h1 class="font-bebas uppercase text-white text-4xl sm:text-2xl s:text-xl font-semibold leading-tight">
                                {{ $post->des }}
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="font-okta px-40 lg:px-24 lg:pl-32 sm:pr-12 sm:pl-24 xs:px-0 mb-20 xs:mb-10">
            <div class="container">
                <div class="text-gray-400 text-sm xs:text-xs font-medium tracking-wide leading-tight mb-5">
                    {!! $post->content !!}
                </div>
            </div>
        </section>
    </div>
</x-layouts.master>
