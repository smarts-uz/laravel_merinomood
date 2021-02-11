<div class="mb-1 font-medium text-gray-520 children-category">
    @if(count($category['children']))
        <div x-data="{ expand: @json(in_array($category['id'], array_column($parentCategories, 'id'))) }">
            <div class="flex justify-between items-center">
                <a class="text-sm" :class="{'text-black': expand}"
                   href="{{ $slug . '/' . $category['slug'] }}">{{ $category['name'] }}</a>
                <button class="w-8 focus:outline-none leading-none" @click="expand = !expand">
                    <span class="text-black text-2xl inline-block transition-all duration-300" :class="{'expand-icon__active': expand}">+</span>
                </button>
            </div>
            <div class="pl-6 pt-1" :class="{'hidden': !expand}">
                @foreach($category['children'] as $children)
                    <x-categories-tree :category="$children"
                                       :parent-categories="$parentCategories"
                                       slug="{{ $slug . '/' . $category['slug'] }}"/>
                @endforeach
            </div>
        </div>
    @else
        <a class="text-sm" href="{{ $slug . '/' . $category['slug'] }}">{{ $category['name'] }}</a>
    @endif
</div>

