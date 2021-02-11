<div class="pr-4 mb-2 font-medium parent-category">
    @if(count($category['children']))
        <div x-data="{ expand: @json(in_array($category['id'], array_column($parentCategories, 'id'))) }">
            <div class="flex justify-between items-center ">
                <a class="text-lg" href="/catalog/{{$category['slug']}}">{{ $category['name'] }}</a>
                <button class="w-8 focus:outline-none leading-none" @click="expand = !expand">
                    <span class="text-2xl inline-block transition-all duration-300" :class="{'expand-icon__active': expand}">+</span>
                </button>
            </div>
            <div class="pl-6 pt-1" :class="{'hidden': !expand}">
                @foreach($category['children'] as $children)
                    <x-categories-tree :category="$children"
                                       :parent-categories="$parentCategories"
                                       slug="/catalog/{{$category['slug']}}"/>
                @endforeach
            </div>
        </div>
    @else
        <a class="text-lg" href="/catalog/{{$category['slug']}}">{{ $category['name'] }}</a>
    @endif
</div>
