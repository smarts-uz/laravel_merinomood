<x-layouts.master page="product">
    <div id="product">
        <nav>
            <div class="container">
                <div class="flex border-b-2 border-gray-450 border-solid pb-6">
                    <a href="/" class="flex text-sm font-medium text-gray-520 mr-5 items-center">
                        <span class="mr-5">Home</span>
                        <span>></span>
                    </a>
                    <a href="{{ $product->category->slug }}" class="flex text-sm font-medium text-gray-520 mr-5 items-center">
                        <span class="mr-5">Catalog</span>
                        <span>></span>
                    </a>
                    <span class="text-gray-750 font-medium text-sm">{{ $product->name }}</span>
                </div>
            </div>
        </nav>
        <livewire:variation :product="$product" :sku="$sku"/>
        <section>
            <div class="container pt-12">
                <div class="pt-2 border-b-2 border-gray-450 border-solid pb-12">
                    <div class="mb-4 rounded overflow-hidden collapse-wrapper">
                        <x-collapse>
                            @slot('trigger')
                                <div class="flex justify-between items-center bg-gray-50 px-7 py-8 trigger-wrapper">
                                    <h3 class="text-1xl font-medium text-gray-750 trigger-name">
                                        Product Inaccuracies In The Description
                                    </h3>
                                    <svg class="w-6 h-auto fill-current text-gray-750 closed" viewBox="0 0 24.882 12.881">
                                        <g id="_1828747" data-name="1828747" transform="translate(6.461 6.501)">
                                            <path id="Path_95" data-name="Path 95"
                                                  d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                                                  transform="translate(-6.46 6.42) rotate(-90)"/>
                                            <path id="Path_96" data-name="Path 96"
                                                  d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                                                  transform="translate(5.54 6.42) rotate(-90)"/>
                                        </g>
                                    </svg>
                                    <svg class="w-3 h-auto fill-current text-gray-750 opened mr-3"
                                         viewBox="0 0 12.881 12.882">
                                        <g id="_1828747" data-name="1828747" transform="translate(-0.039 0.001)">
                                            <path id="Path_95" data-name="Path 95"
                                                  d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                                                  transform="translate(0)"/>
                                            <path id="Path_96" data-name="Path 96"
                                                  d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                                                  transform="translate(0 0)"/>
                                        </g>
                                    </svg>
                                </div>
                            @endslot
                            <div class="w-full bg-gray-50 px-7 pb-6">
                                <div class="pb-4 font-medium text-gray-750">
                                    <div class="prose-sm">
                                        {!! $product->des !!}
                                    </div>
                                </div>
                                <div class="border-t-2 border-gray-450 border-solid pt-4">
                                    <p class="text-xs font-medium text-gray-750">Information about technical
                                        characteristics,
                                        scope of delivery, country of manufacture,
                                        appearance and color of the product is for reference only and is based on the latest
                                        information available at the time of publication</p>
                                </div>
                            </div>
                        </x-collapse>
                    </div>
                    <div class="mb-4 rounded overflow-hidden collapse-wrapper">
                        <x-collapse>
                            @slot('trigger')
                                <div class="flex justify-between items-center bg-gray-50 px-7 py-8 trigger-wrapper">
                                    <h3 class="text-1xl font-medium text-gray-750 trigger-name">
                                        Reviews <span class="text-gray-450 text-sm font-medium">(34 Reviews)</span>
                                    </h3>
                                    <svg class="w-6 h-auto fill-current text-gray-750 closed" viewBox="0 0 24.882 12.881">
                                        <g id="_1828747" data-name="1828747" transform="translate(6.461 6.501)">
                                            <path id="Path_95" data-name="Path 95"
                                                  d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                                                  transform="translate(-6.46 6.42) rotate(-90)"/>
                                            <path id="Path_96" data-name="Path 96"
                                                  d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                                                  transform="translate(5.54 6.42) rotate(-90)"/>
                                        </g>
                                    </svg>
                                    <svg class="w-3 h-auto fill-current text-gray-750 opened mr-3" viewBox="0 0 12.881 12.882">
                                        <g id="_1828747" data-name="1828747" transform="translate(-0.039 0.001)">
                                            <path id="Path_95" data-name="Path 95"
                                                  d="M.7,12.881A.663.663,0,0,1,.233,11.75L11.789.193a.663.663,0,0,1,.937.937L1.171,12.687a.664.664,0,0,1-.469.194Zm0,0"
                                                  transform="translate(0)"/>
                                            <path id="Path_96" data-name="Path 96"
                                                  d="M12.258,12.881a.658.658,0,0,1-.468-.194L.233,1.131A.663.663,0,0,1,1.17.194L12.726,11.75a.663.663,0,0,1-.468,1.132Zm0,0"
                                                  transform="translate(0 0)"/>
                                        </g>
                                    </svg>
                                </div>
                            @endslot
                            <div class="w-full bg-gray-50 px-7 pb-16">
                                <h5 class="text-gray-750 text-base font-medium mb-7">Johnny's Chop Shop Beard Oil Board
                                    Maintenance Oil Beard Oil, 30 Ml</h5>
                                <div class="bg-gray-350 flex justify-between py-4 px-7 rounded">
                                    <div class="flex items-center">
                                        <div class="flex items-center mr-12">
                                            <span class="mr-2 font-medium text-base text-gray-750">Sort:</span>
                                            <div x-data="{sort: ['All', 'Date', 'About']}" class="date product-select-wrapper small select-sort">
                                                <x-select class="text-gray-750 font-medium text-gray-750" options="{showContent: 'down'}">
                                                    <template x-for="item in sort">
                                                        <option x-text="item"></option>
                                                    </template>
                                                </x-select>
                                            </div>
                                        </div>
                                        <label for="with-photos" class="flex items-center ml-2 cursor-pointer">
                                            <input id="with-photos" type="checkbox" class="hidden">
                                            <span class="w-5 h-5 border-2 rounded overflow-hidden border border-gray-650 mr-4 check-wrap p-1">
                                                        <svg class="w-full h-full fill-current text-gray-650 opacity-0 check-icon" enable-background="new 0 0 515.556 515.556"
                                                             viewBox="0 0 515.556 515.556">
                                                        <path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"/>
                                                    </svg>
                                                </span>
                                            <span class="font-medium text-base text-gray-750">Only With Photos</span>
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <x-rater options="{rating: 3,}"></x-rater>
                                        <span class="font-medium text-base text-gray-750 ml-3">96% Recommended</span>
                                    </div>
                                </div>
                                <div class="pt-7">
                                    <x-flickity class="focus:outline-none flex flex-col-reverse" data="slide: 1" options="{
                                            cellAlign: 'left',
                                            prevNextButtons: true,
                                            draggable: false,
                                            fade: true,
                                            pageDots: false,
                                            cellSelector: '.carousel-cell',
                                            on: {
                                              change(index) {
                                                  slide = index + 1
                                              }
                                            }
                                        }">
                                        <div class="absolute w-full h-auto carousel-cell">
                                            <div class="flex border-b-2 border-gray-450 border-solid pb-8 mb-8">
                                                <div class="w-15/100 flex flex-col">
                                                    <span class="font-medium text-base text-gray-750">Eliana M</span>
                                                    <span class="font-medium text-gray-520 text-sm">Location: FL</span>
                                                    <span class="font-medium text-gray-520 text-sm mb-6">Age: 18-24</span>
                                                    <span class="font-medium text-gray-520 text-sm">Apr 27, 2020</span>
                                                </div>
                                                <div class="w-85/100">
                                                    <div class="flex justify-between">
                                                        <span class="font-semibold text-base text-gray-750">A New Favorite!!</span>
                                                        <x-rater options="{rating: 3,}"></x-rater>
                                                    </div>
                                                    <p class="font-medium text-gray-750 text-sm pt-2 pb-3">I’ve honestly ditched my
                                                        other perfumes for this one. It’s so much more
                                                        affordable than others and the scent selection is great! The bottle is simple
                                                        and neat, it looks so nice on my vanity and the EDP size is small enough to
                                                        travel
                                                        with! I rave about it to just about that compliments my perfume.</p>
                                                    <div class="flex justify-between">
                                                        <p class="text-sm font-semibold text-gray-750"><span
                                                                class="text-base font-semibold">Yes, </span>I recommend this
                                                            product.</p>
                                                        <a href="#" class="underline text-sm font-medium text-gray-450">This is <span
                                                                class="text-base font-semibold text-gray-750">spam</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex border-b-2 border-gray-450 border-solid pb-8 mb-8">
                                                <div class="w-15/100 flex flex-col">
                                                    <span class="font-medium text-base text-gray-750">Eliana M</span>
                                                    <span class="font-medium text-gray-520 text-sm">Location: FL</span>
                                                    <span class="font-medium text-gray-520 text-sm mb-6">Age: 18-24</span>
                                                    <span class="font-medium text-gray-520 text-sm">Apr 27, 2020</span>
                                                </div>
                                                <div class="w-85/100">
                                                    <div class="flex justify-between">
                                                        <span class="font-semibold text-base text-gray-750">A New Favorite!!</span>
                                                        <x-rater options="{rating: 3,}"></x-rater>
                                                    </div>
                                                    <p class="font-medium text-gray-750 text-sm pt-2 pb-3">I’ve honestly ditched my
                                                        other perfumes for this one. It’s so much more
                                                        affordable than others and the scent selection is great! The bottle is simple
                                                        and neat, it looks so nice on my vanity and the EDP size is small enough to
                                                        travel
                                                        with! I rave about it to just about that compliments my perfume.</p>
                                                    <div class="flex justify-between">
                                                        <p class="text-sm font-semibold text-gray-750"><span
                                                                class="text-base font-semibold">Yes, </span>I recommend this
                                                            product.</p>
                                                        <a href="#" class="underline text-sm font-medium text-gray-450">This is <span
                                                                class="text-base font-semibold text-gray-750">spam</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute w-full h-auto carousel-cell">
                                            <div class=" flex border-b-2 border-gray-450 border-solid pb-8 mb-8">
                                                <div class="w-15/100 flex flex-col">
                                                    <span class="font-medium text-base text-gray-750">Tony Stark</span>
                                                    <span class="font-medium text-gray-520 text-sm">Location: FL</span>
                                                    <span class="font-medium text-gray-520 text-sm mb-6">Age: 18-24</span>
                                                    <span class="font-medium text-gray-520 text-sm">Apr 27, 2020</span>
                                                </div>
                                                <div class="w-85/100">
                                                    <div class="flex justify-between">
                                                        <span class="font-semibold text-base text-gray-750">A New Favorite!!</span>
                                                        <x-rater options="{rating: 3,}"></x-rater>
                                                    </div>
                                                    <p class="font-medium text-gray-750 text-sm pt-2 pb-3">I’ve honestly ditched my
                                                        other perfumes for this one. It’s so much more
                                                        affordable than others and the scent selection is great! The bottle is simple
                                                        and neat, it looks so nice on my vanity and the EDP size is small enough to
                                                        travel
                                                        with! I rave about it to just about that compliments my perfume.</p>
                                                    <div class="flex justify-between">
                                                        <p class="text-sm font-semibold text-gray-750"><span
                                                                class="text-base font-semibold">Yes, </span>I recommend this
                                                            product.</p>
                                                        <a href="#" class="underline text-sm font-medium text-gray-450">This is <span
                                                                class="text-base font-semibold text-gray-750">spam</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex border-b-2 border-gray-450 border-solid pb-8 mb-8">
                                                <div class="w-15/100 flex flex-col">
                                                    <span class="font-medium text-base text-gray-750">Tony Stark</span>
                                                    <span class="font-medium text-gray-520 text-sm">Location: FL</span>
                                                    <span class="font-medium text-gray-520 text-sm mb-6">Age: 18-24</span>
                                                    <span class="font-medium text-gray-520 text-sm">Apr 27, 2020</span>
                                                </div>
                                                <div class="w-85/100">
                                                    <div class="flex justify-between">
                                                        <span class="font-semibold text-base text-gray-750">A New Favorite!!</span>
                                                        <x-rater options="{rating: 3,}"></x-rater>
                                                    </div>
                                                    <p class="font-medium text-gray-750 text-sm pt-2 pb-3">I’ve honestly ditched my
                                                        other perfumes for this one. It’s so much more
                                                        affordable than others and the scent selection is great! The bottle is simple
                                                        and neat, it looks so nice on my vanity and the EDP size is small enough to
                                                        travel
                                                        with! I rave about it to just about that compliments my perfume.</p>
                                                    <div class="flex justify-between">
                                                        <p class="text-sm font-semibold text-gray-750"><span
                                                                class="text-base font-semibold">Yes, </span>I recommend this
                                                            product.</p>
                                                        <a href="#" class="underline text-sm font-medium text-gray-450">This is <span
                                                                class="text-base font-semibold text-gray-750">spam</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between pt-1 items-center">
                                            <a href="#" class="button button__black">Write a review</a>
                                            <div class="flex items-center">
                                                <button @click="flickity.previous()">
                                                    <svg class="w-3 transform rotate-180 fill-current text-gray-520"
                                                         viewBox="0 0 13.15 10.612">
                                                        <path d="M12.94,46.157,8.191,41.55a.738.738,0,0,0-1.018,0l-.431.418a.683.683,0,0,0-.21.494.7.7,0,0,0,.21.5l2.771,2.693H.71a.692.692,0,0,0-.71.686v.591a.718.718,0,0,0,.71.717H9.544l-2.8,2.708a.677.677,0,0,0,0,.98l.431.417a.738.738,0,0,0,1.018,0l4.749-4.607a.689.689,0,0,0,0-.991Z"
                                                              transform="translate(0 -41.346)"/>
                                                    </svg>
                                                </button>
                                                <span class="text-gray-520 font-semibold mx-3"><span class="text-gray-750" x-text="slide"></span> / <span x-text="flickity ? flickity.slides.length : 1"></span></span>
                                                <button @click="flickity.next()">
                                                    <svg class="w-3 fill-current text-gray-750" viewBox="0 0 13.15 10.612">
                                                        <path d="M12.94,46.157,8.191,41.55a.738.738,0,0,0-1.018,0l-.431.418a.683.683,0,0,0-.21.494.7.7,0,0,0,.21.5l2.771,2.693H.71a.692.692,0,0,0-.71.686v.591a.718.718,0,0,0,.71.717H9.544l-2.8,2.708a.677.677,0,0,0,0,.98l.431.417a.738.738,0,0,0,1.018,0l4.749-4.607a.689.689,0,0,0,0-.991Z"
                                                              transform="translate(0 -41.346)"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </x-flickity>
                                </div>
                            </div>
                        </x-collapse>
                    </div>
                    <livewire:delivery/>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-12 pb-10">
                <h3 class="text-center text-gray-750 text-3xl font-medium pt-3 mb-8">Similar Products</h3>
                <div class="flex justify-between">
                    @foreach($similarVariations as $similarVariation)
                        <a href="/products/{{$similarVariation->product->slug}}/{{$similarVariation->sku}}"
                           class="w-1/5 similar-product-wrap mb-6">
                            <img class="mb-5 w-full h-auto"
                                 src="{{ '/storage/' . $similarVariation->miniature }}"
                                 alt="{{ $similarVariation->name() }}">
                            <h5 class="font-semibold text-gray-750 text-sm mb-2">
                                {{ $similarVariation->name() }}
                            </h5>
                            <span class="text-xl font-bold text-gray-750">
                                {{ $similarVariation->minPrice() }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-layouts.master>
