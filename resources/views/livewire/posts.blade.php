<div id="posts">
    <nav class="pt-8 mb-12 sm:mb-6">
        <div class="container">
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
                <a href="/posts" class="text-gray-750 font-medium text-sm">Blog</a>
            </div>
        </div>
    </nav>
    @isset($banner)
        <section class="mb-12">
            <div class="container">
                <a href="{{ $banner->link }}" class="flex justify-center">
                    <div class="relative">
                        <img class="xs:hidden" src="{{ Storage::url($banner->image) }}" alt="{{ $banner->title }}">
                        <img class="main-mobile" src="{{ Storage::url($banner->image) }}" alt="{{ $banner->title }}">
                        <div class="intro-title p-8 lg:p-6 sm:p-4">
                            <h2 class="font-bebas uppercase text-white text-6xl sm:text-5xl xs:text-6xl 3xs:text-5xl s:text-4xl font-semibold leading-tight mb-5 lg:mb-3 sm:mb-2">
                                {{ $banner->title }}
                            </h2>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    @endisset
    <section class="mb-20 xs:mb-8">
        <div class="container">
            <div class="font-okta flex">
                <div>
                    <h1 class="font-bebas text-3xl text-gray-800 font-bold mr-4 mb-8">Post list</h1>
                    <div class="flex flex-wrap justify-between sm:flex-col">
                        @foreach($posts as $post)
                            <div class="w-47/100 sm:w-full flex mb-10">
                                <a class="block" href="/posts/{{ $post->slug }}">
                                    <div class="bg-gray-175 rounded-lg pt-4 pb-6 relative blog-item">
                                        <div class="flex justify-end items-baseline mb-4 px-4">
                                            <span
                                                class="text-xs text-gray-700 font-medium">
                                                {{ $post->creationTime() }}
                                            </span>
                                        </div>
                                        <div class="mb-5">
                                            <img class="w-full object-contain"
                                                 src="{{ Storage::url($post->miniature) }}"
                                                 alt="{{ $post->title }}">
                                        </div>
                                        <h3 class="w-5/6 lg:w-full text-xl xs:text-lg  text-gray-700 font-medium mb-3 px-4">
                                            {{ $post->des }}
                                        </h3>
                                        <p class="text-sm text-gray-400 font-medium tracking-wide leading-tight mb-5 px-4">
                                            {{ Str::limitHTML($post->content, 200) }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex items-center justify-end xs:justify-center font-medium">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
