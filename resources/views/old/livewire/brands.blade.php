<section class="container py-12 md:py-5">
    <div class="flex justify-center items-baseline mb-4">
        <h2 class="block-title block-title__center text-3xl font-medium">Fashion brand</h2>
    </div>
    <div class="-mx-4 flex justify-center items-center flex-wrap">
        @foreach($brands as $brand)
            <img class="w-36 m-4" src="{{ '/storage/' . $brand->logo }}" alt="{{ $brand->name }}">
        @endforeach
    </div>
    @if($brands->lastPage() > 1)
        <div class="text-center my-4">
            <button wire:click="$emit('loadMore')" class="button button__white">View more</button>
        </div>
    @endif
</section>
