<div class="mb-20 flex md:flex-col">
    <div class="w-4/12 md:w-full md:mb-16">
        <div class="relative px-8 xs:px-0 pt-12 pb-5 rounded-lg xs:rounded-none border-2 border-gray-450 xs:border-0 xs:border-t-2 xs:border-b-2">
            <div class="title absolute">
                <h2 class="bg-white px-3 text-3xl text-gray-750">Help</h2>
            </div>
            <div class="flex flex-col">
                @foreach($faqCategories as $faqCategory)
                    <div class="bg-gray-520 mb-2">
                        <x-collapse :open="$faqCategory->is($activeQuestion->faqCategory)">
                            @slot('trigger')
                                <button class="w-full text-left focus:outline-none pl-5 py-4 text-lg font-medium text-white {{ $faqCategory->is($activeQuestion->faqCategory) ? 'bg-gray-750 border-l-4 border-orange-450' : 'bg-gray-520'}}"
                                >{{ $faqCategory->name }}</button>
                            @endslot
                            <div class="flex flex-col px-10 py-5">
                                @foreach($faqCategory->questions as $question)
                                    <a href="/faq/{{ $faqCategory->slug }}/{{ $question->slug }}"
                                       class="text-sm font-medium mb-3">
                                        <span class="hover:text-white leading-none {{ $question->is($activeQuestion) ? 'text-white border-b border-white' : 'text-gray-450' }}">
                                            {{ $question->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </x-collapse>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="w-9/12 md:w-full ml-5 md:ml-0">
        <div class="relative px-12 xs:px-0 pb-12 rounded-lg xs:rounded-none border-2 border-gray-450 xs:border-0 xs:border-t-2 xs:border-b-2 mb-12">
            {{ $slot }}
        </div>
        {{ $footer ?? null }}
    </div>
</div>
