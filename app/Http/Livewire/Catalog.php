<?php

namespace App\Http\Livewire;

use App\Brand;
use App\Category;
use App\Variation;
use App\VariationItem;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Catalog extends Component
{
    use WithPagination;

    public $view;

    public $activeCategory;
    public $activeCategoryIds;
    public $parentCategories;
    public $categories;

    protected $updatesQueryString = [
        'sort',
        'brands' => ['except' => ''],
        'colors' => ['except' => ''],
        'minPrice',
        'maxPrice'
    ];

    public $sort;
    public $sortOptions;

    public $brandOptions;
    public $selectedBrands;
    public $brands;

    public $colorOptions;
    public $selectedColors;
    public $colors;

    public $generalMinPrice;
    public $generalMaxPrice;
    public $minPrice;
    public $maxPrice;

    public function mount($category)
    {
        $this->setupView();
        $this->setupCategories($category);
        $this->setupSortOptions();
        $this->setupBrandOptions();
        $this->setupColorOptions();
        $this->setupPriceOptions();
    }

    protected function setupView()
    {
        $this->view = Session::get('view', 'without-sidebar');
    }

    protected function setupCategories($category)
    {
        $this->activeCategory = $category;

        $this->activeCategoryIds = Category::select('id')->descendantsAndSelf($this->activeCategory->id)->toArray();

        $this->parentCategories = Category::ancestorsAndSelf($category->id)->toArray();
        $slug = '/catalog';
        foreach ($this->parentCategories as $key => $aCategory){
            $slug .= '/' . $aCategory['slug'];
            $this->parentCategories[$key]['slug'] = $slug;
        }

        $this->categories = Category::get()->toTree()->toArray();
    }

    protected function setupSortOptions()
    {
        $this->sortOptions = [
            ['value' => 'created_at-desc', 'label' => 'New Products'],
            ['value' => 'price-desc', 'label' => 'Price In Descending Order'],
            ['value' => 'price-asc', 'label' => 'Price In Ascending Order'],
        ];

        $this->sort = 'created_at-desc';
        $this->sort = request()->query('sort', $this->sort);
    }

    protected function setupBrandOptions()
    {
        $this->brandOptions = Brand::whereHas('products', function ($query){
            $query->whereIn('category_id', $this->activeCategoryIds);
        })->get()->toArray();

        $this->brands = request()->query('brands', $this->brands);
        $this->selectedBrands = $this->brands ? explode(',', $this->brands) : [];
    }

    protected function setupColorOptions()
    {
        $this->colorOptions = Variation::whereHas('product', function ($query){
            $query->whereIn('category_id', $this->activeCategoryIds);
        })->pluck('color')->filter()->unique()->toArray();

        $this->colors = request()->query('colors', $this->colors);
        $this->selectedColors = $this->colors ? explode(',', $this->colors) : [];
    }

    protected function setupPriceOptions()
    {
        $this->generalMinPrice = 0;

        $variationsMaxPrice = Variation::whereHas('product', function ($query) {
            $query->whereIn('category_id', $this->activeCategoryIds);
        })->max('price');
        $variationItemsMaxPrice = VariationItem::whereHas('variation.product', function ($query) {
            $query->whereIn('category_id', $this->activeCategoryIds);
        })->max('price');

        $this->generalMaxPrice = max($variationsMaxPrice, $variationItemsMaxPrice);

        $this->minPrice = request()->query('minPrice', $this->generalMinPrice);
        $this->maxPrice = request()->query('maxPrice', $this->generalMaxPrice);
    }

    public function hydrate()
    {
        $this->emit('scrollTo', '#variations');
    }

    public function getWithoutSidebarProperty()
    {
        return $this->view === 'without-sidebar';
    }

    public function getWithSidebarProperty()
    {
        return $this->view === 'with-sidebar';
    }

    public function changeView($option)
    {
        $this->view = $option;
        Session::put('view', $option);
    }

    public function selectSort($optionValue)
    {
        $this->sort = $optionValue;
        $this->resetPage();
    }

    public function toggleBrand($brandId)
    {
        if (in_array($brandId, $this->selectedBrands)) {
            unset($this->selectedBrands[array_search($brandId, $this->selectedBrands)]);
        }else{
            $this->selectedBrands[] = $brandId;
        }
        $this->setBrandsQueryString();
        $this->resetPage();
    }

    public function setAllBrands()
    {
        $this->selectedBrands = [];
        $this->setBrandsQueryString();
        $this->resetPage();
    }

    protected function setBrandsQueryString()
    {
        $this->brands = implode(",", $this->selectedBrands);
    }

    public function toggleColor($color)
    {
        if (in_array($color, $this->selectedColors)) {
            unset($this->selectedColors[array_search($color, $this->selectedColors)]);
        }else{
            $this->selectedColors[] = $color;
        }
        $this->setColorsQueryString();
        $this->resetPage();
    }

    public function setAllColors()
    {
        $this->selectedColors = [];
        $this->setColorsQueryString();
        $this->resetPage();
    }

    protected function setColorsQueryString()
    {
        $this->colors = implode(",", $this->selectedColors);
    }

    public function updatedMinPrice($value)
    {
        $this->resetPage();
    }

    public function updatedMaxPrice($value)
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'components.pagination-links';
    }

    public function render()
    {
        $variations = Variation::whereHas('product', function ($query){
            $query->whereIn('category_id', $this->activeCategoryIds);
        });

        if(count($this->selectedBrands)){
            $variations = $variations->whereHas('product', function ($query){
                $query->whereIn('brand_id', $this->selectedBrands);
            });
        }

        if(count($this->selectedColors)){
            $variations = $variations->whereIn('color', $this->selectedColors);
        }

        $variations = $variations->withMinimumPrice()->where(function ($query){
            $query->whereBetween('price', [$this->minPrice, $this->maxPrice])
                ->orWhereHas('variationItems', function ($query){
                    $query->whereBetween('price', [$this->minPrice, $this->maxPrice]);
                });
        });

        $sortValue = explode('-', $this->sort)[0];
        $sortType = explode('-', $this->sort)[1];

        $variations = $variations->with('product')->orderBy($sortValue, $sortType)->paginate(20);

        return view('livewire.catalog', [
            'variations' => $variations
        ]);
    }
}
