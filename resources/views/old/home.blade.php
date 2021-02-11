<x-layouts.master page="home">
    @isset($promoBanner)
        <section class="relative">
            <img class="w-full sm:h-112 max-h-screen object-cover"
                 src="{{ '/storage/' . $promoBanner->image }}"
                 alt="{{ $promoBanner->title }}">
            <div class="promo-block pt-26 sm:px-5 lg:pt-5 absolute top-0 right-0 bottom-0 left-0 flex justify-center items-center">
                <div class="max-w-xl text-white text-center">
                    <h1 class="promo-title xl:text-4xl xs:leading-none xs:mb-3 uppercase font-black">{{ $promoBanner->title }}</h1>
                    <p class="pb-18 xl:pb-4 xs:mb-4">{{ $promoBanner->des }}</p>
                    <a href="{{ $promoBanner->link }}" class="button button__white">View the catalog</a>
                </div>
            </div>
        </section>
    @endisset
    <section class="container py-12">
        <div class="-mx-7 xl:-mx-5 ">
            <div class="md:hidden flex justify-center">
                @foreach($categories as $category)
                    <a href="/catalog/{{$category->slug}}" class="block w-1/5 px-7 xl:px-5">
                        <div class="w-full h-76 xl:h-64 mb-6 x:mb-3">
                            <img class="w-full h-full object-contain"
                                 src="{{ '/storage/' . $category->image }}"
                                 alt="{{ $category->name }}">
                        </div>
                        <h4 class="text-2xl font-semibold text-gray-750 text-center">{{ $category->name }}</h4>
                        <p class="font-medium text-gray-550 text-center">{{ $category->des }}</p>
                    </a>
                @endforeach
            </div>
            <x-flickity class="hidden md:flex popular-slider w-full overflow-hidden focus:outline-none flex-col"
                        data="slide: 1" options="{
                                        cellAlign: 'left',
                                        prevNextButtons: false,
                                        pageDots: false,
                                        cellSelector: '.carousel-cell',
                                        on: {
                                          change(index) {
                                              slide = index + 1
                                          }
                                        }
                                    }">
                @foreach($categories as $category)
                    <a href="/catalog/{{ $category->slug }}" class="block w-64 xs:w-48 xl:px-5 xs:px-3 product-card carousel-cell">
                        <div class="w-full mb-6">
                            <img class="w-full h-full object-contain"
                                 src="{{ '/storage/' . $category->image }}"
                                 alt="{{ $category->name }}">
                        </div>
                        <h4 class="text-2xl font-semibold text-gray-750 text-center">{{ $category->name }}</h4>
                        <p class="font-medium text-gray-550 text-center">{{ $category->des }}</p>
                    </a>
                @endforeach
            </x-flickity>
        </div>
    </section>
    <section class="container py-16">
        <div class="-mx-12 xl:-mx-8 flex justify-center lg:justify-between sm:flex-wrap lg:px-8 ">
            <div class="w-65/100 lg:w-1/2 sm:w-full px-12 lg:px-0 xl:px-8 sm:mb-16 2xs:mb-10">
                <div class="flex justify-between items-baseline mb-4">
                    <h2 class="block-title text-3xl 3xs:text-2xl font-medium">New arrivals</h2>
                </div>
                <div class="flex justify-start lg:flex-wrap">
                    @foreach($newProducts as $newProduct)
                        <a href="/products/{{ $newProduct->slug }}/{{ $newProduct->variations[0]->sku }}"
                           class="block w-1/4 lg:w-1/2 s:w-full s:px-0 px-2 lg:mb-5">
                            <div class="w-full h-72 xl:h-56 flex items-center mb-6">
                                <img class="w-full h-full object-contain"
                                     src="{{ '/storage/' . $newProduct->variations[0]->miniature }}"
                                     alt="{{ $newProduct->variations[0]->name() }}">
                            </div>
                            <h4 class="text-sm font-semibold text-gray-750 mb-2">
                                {{ $newProduct->variations[0]->name() }}
                            </h4>
                            <span class="text-xl font-bold text-gray-750">
                                {{ $newProduct->variations[0]->minPrice() }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="collection-block w-35/100 lg:w-1/2 sm:w-full px-12 lg:pl-10 lg:pr-0 xl:px-8 sm:px-0">
                @isset($homeBanner)
                    <a href="{{ $homeBanner->link }}" class="block relative sm:h-48 sm:overflow-hidden">
                        <img class="w-full" src="{{ '/storage/' . $homeBanner->image }}" alt="{{ $homeBanner->title }}">
                        @if($homeBanner->title)
                            <div class="absolute top-36/100 w-full">
                                <h3 class="collection-title text-center py-2 text-white font-semibold sm:mb-5">{{ $homeBanner->title }}</h3>
                            </div>
                        @endif
                    </a>
                @endisset
            </div>
        </div>
    </section>
    <section class="bg-gray-50">
        <div class="container py-16">
            <div class="flex justify-between items-baseline mb-4">
                <h2 class="block-title text-3xl 3xs:text-2xl font-medium">Popular products</h2>
            </div>
            <div class="-mx-3 flex justify-start x:flex-wrap">
                @foreach($popularVariations as $popularVariation)
                    <a href="/products/{{ $popularVariation->product->slug }}/{{ $popularVariation->sku }}"
                       class="block w-1/8 px-3 x:w-3/12 xs:w-6/12 s:w-full x:mb-8">
                        <div class="w-full h-56 xl:h-48 x:h-56 2xs:h-48 flex items-center mb-4">
                            <img class="w-full h-full object-contain"
                                 src="{{ '/storage/' . $popularVariation->miniature }}"
                                 alt="{{ $popularVariation->name() }}">
                        </div>
                        <h4 class="text-sm font-semibold text-gray-750 mb-2">
                            {{ $popularVariation->name() }}
                        </h4>
                        <span class="text-xl font-bold text-gray-750">
                            {{ $popularVariation->minPrice() }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    <section class="container py-16 md:py-7">
        <div class="flex justify-between items-baseline mb-4">
            <h2 class="block-title text-3xl font-medium">News n blog</h2>
            <a href="/posts" class="font-medium text-gray-750 underline">More</a>
        </div>
        <div class="-mx-7 xl:-mx-5 px-5 flex lg:flex-wrap lg:justify-center">
            <div class="w-8/12 x:w-9/12 lg:w-full  flex xs:flex-wrap lg:mb-7">
                @if(count($posts) > 0)
                    <a href="/posts/{{ $posts[0]->slug }}" class="relative flex w-1/2 xs:w-full xs:mb-10">
                        <img class="w-full h-full object-cover rounded-lg"
                             src="{{ '/storage/' . $posts[0]->miniature }}"
                             alt="{{ $posts[0]->title }}">
                        <div class="absolute w-full h-full px-3 flex flex-col items-center justify-center text-center">
                            <h3 class="text-3xl md:text-2xl sm:text-xl xs:text-2xl 2sm:text-xl leading-tight font-black text-gray-750 uppercase">{{ Str::limit($posts[0]->title, 50, '...') }}</h3>
                            <p class="max-w-2xs font-medium">{{ Str::limit($posts[0]->des, 35, '...') }}</p>
                        </div>
                    </a>
                @endif
                @if(count($posts) > 1)
                    <div class="w-1/2 xs:w-full  px-7 xl:px-5 xs:px-0">
                        <img class="rounded-lg w-full h-full object-cover"
                             src="{{ '/storage/' . $posts[1]->miniature }}"
                             alt="{{ $posts[1]->title }}">
                    </div>
                @endif
            </div>
            @if(count($posts) > 1)
                <div class="w-4/12 x:w-3/12 lg:w-1/2 md:w-9/12 xs:w-full lg:px-7 flex">
                    <div class="text-gray-750 text-medium pl-5 xl:pl-3 lg:pl-0 lg:flex lg:flex-col lg:items-center">
                        <h3 class="text-2xl py-4 xl:py-3 lg:text-center">{{ $posts[1]->title }}</h3>
                        <p class="text-sm mb-8 xl:mb-6 lg:text-center">{{ $posts[1]->des }}</p>
                        <a href="/posts/{{ $posts[1]->slug }}" class="button button__black">Show more</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <livewire:brands/>
</x-layouts.master>
