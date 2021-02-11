<x-layouts.master>
    <section class="container" id="error-404">
        <div class="pb-6 breadcrumb text-gray-520 text-sm font-medium border-b-2 border-gray-450 sm:hidden">
            <a href="/">Home</a>
            <a href="" class="text-gray-750">Error</a>
        </div>
        <div class="py-20 text-center">
            <div class="flex justify-center">
                <img src="{{ asset('/images/icons/error-404.svg') }}" alt="">
            </div>
            <h1 class="py-10 font-medium text-3xl text-gray-750 2xs:text-2xl 3xs:text-xl">Oops, sorry. That page can't be found.</h1>
            <a href="{{ url()->previous() }}" class="button button__black">Go back</a>
        </div>
    </section>
</x-layouts.master>
