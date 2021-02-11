<x-layouts.master>
    <div id="post">
        <nav class="pt-18 xs:pt-0 mb-12">
            <div class="container">
                <div class="relative flex items-center justify-between border-b-2 border-gray-450 py-9">
                    <h2 class="absolute text-11xl text-gray-850 font-medium uppercase opacity-5 ml-2 xs:hidden">Blog</h2>
                    <div class="relative breadcrumb text-gray-520 text-sm font-medium">
                        <a href="/">Home</a>
                        <a href="/posts">Blog</a>
                        <span class="text-gray-750">{{ $post->title }}</span>
                    </div>
                    <div class="text-right sm:hidden">
                        <span class="fon-medium text-gray-520">{{ $postsTotal }} articles</span>
                    </div>
                </div>
            </div>
        </nav>
        <section class="mb-16">
            <div class="container">
                <div class="border-b-2 border-gray-450 pb-40">
                    <div class="w-full flex justify-center">
                        <img src="{{ '/storage/' . $post->banner }}" alt="{{ $post->title }}">
                    </div>
                    <div class="flex items-center mt-8 mb-6">
                        <img src="{{ asset('/images/blog-inner-eye.svg') }}" alt="">
                        <span class="text-sm text-gray-520 ml-3">{{ $post->views }} people</span>
                    </div>
                    <h1 class="hidden text-5xl text-gray-750 leading-snug font-bold mb-7 sm:text-4xl s:text-2xl lg:text-center lg:block">{{ $post->title }}</h1>
                    <div class="flex items-baseline lg:flex-col">
                        <div class="w-full mr-16">
                            <h1 class="text-5xl text-gray-750 leading-snug font-bold sm:text-4xl s:text-2xl lg:text-center lg:hidden">{{ $post->title }}</h1>
                            <div class="my-8">
                                <span class="text-sm text-gray-520 font-medium">article</span>
                            </div>
                            <div class="w-full flex flex-wrap lg:flex-no-wrap xs:flex-wrap">
                                @foreach($post->media as $image)
                                    <div class="w-30/100 lg:w-1/5 xs:w-1/2 pr-2 2sm:mr-0 mb-3">
                                        <img src="{{ '/storage/' . $image->src }}" alt="">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="w-full leading-tight text-gray-520 font-medium lg:order-first">
                            <div class="prose-sm">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-32">
            <div class="container">
                    <h2 class="text-4xl text-gray-750 text-center font-bold">You may also be interested in</h2>
                    <div class="xs:overflow-x-scroll scrollbar">
                        <div class="flex flex-wrap xs:flex-no-wrap items-baseline justify-start mt-10 xs:w-max">
                            @foreach($recommendedPosts as $recommendedPost)
                                <div class="w-1/5 sm:w-1/3 post-item">
                                    <a href="/posts/{{$recommendedPost->slug}}" class="block px-2 mb-6 font-medium">
                                        <div class="h-48 w-full mb-4 sm:mb-3">
                                            <img class="w-full h-full object-contain rounded" src="{{ '/storage/' . $recommendedPost->miniature }}" alt="{{ $recommendedPost->title }}">
                                        </div>
                                        <p class="my-4 sm:mb-4 sm:my-0">{{ $recommendedPost->title }}</p>
                                        <span class="text-sm text-gray-520">{{ $recommendedPost->created_at->format('d.m.Y')}}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.master>
