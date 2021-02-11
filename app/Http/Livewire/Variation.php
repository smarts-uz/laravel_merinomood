<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithBasket;
use App\Http\Livewire\Traits\WithFavorites;
use App\State;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Variation extends Component
{
    use WithFavorites, WithBasket;

    public $product;
    public $activeVariation;
    public $color;
    public $activeVariationItem;
    public $size;
    public $stateOptions;
    public $state;
    public $activeState;
    public $quantity;

    protected $updatesQueryString = ['size'];

    public function mount($product, $sku)
    {
        $this->product = $product;

        $this->setupActiveVariation($sku);

        $this->setupActiveVariationItem();

        $this->setupQuantity();

        $this->setupStateOptions();
    }

    protected function setupActiveVariation($sku)
    {
        $this->activeVariation = $this->product->variations->firstWhere('sku', $sku);

        $this->color = $this->activeVariation->id;

        $this->addToViewedVariations($this->activeVariation->id);
    }

    protected function setupStateOptions()
    {
        $this->stateOptions = State::whereHas('shippings')->with('shippings')->get();
    }

    protected function setupActiveVariationItem()
    {
        $this->size = request()->query('size');

        if($this->size){
            $this->activeVariationItem = $this->activeVariation->variationItems->firstWhere('id', $this->size);
        }

        $this->activeVariationItem = $this->activeVariation->variationItems->first();
    }

    protected function setupQuantity()
    {
        if($this->activeVariationItem){
            $this->quantity = $this->activeVariationItem->in_stock ? 1 : 0;
        }else{
            $this->quantity = $this->activeVariation->in_stock ? 1 : 0;
        }
    }

    public function getPriceProperty()
    {
        if($this->activeVariationItem){

            return $this->activeVariationItem->price;
        }

        return $this->activeVariation->price;
    }

    public function getDeliveryDateProperty()
    {
        if($this->activeState){

            return Carbon::now()->addDays($this->activeState->shippings->first()->duration)->format('M d');
        }

        return false;
    }

    public function getMaxQuantityProperty()
    {
        if($this->activeVariationItem){

            return $this->activeVariationItem->in_stock;
        }

        return $this->activeVariation->in_stock;
    }

    public function updatedState($value)
    {
        $this->activeState = $this->stateOptions->firstWhere('id', $value);
    }

    public function updatedColor($value)
    {
        $this->activeVariation = $this->product->variations->firstWhere('id', $value);

        if($this->activeVariation->variationItems->count()){
            $this->activeVariationItem = $this->activeVariation->variationItems->first();
        }else{
            $this->activeVariationItem = null;
        }

        $this->setupQuantity();

        $this->emit('urlChange', $this->activeVariation->path());
        $this->dispatchBrowserEvent('variation-changed');
    }

    public function increaseQuantity()
    {
        if($this->activeVariationItem){
            if($this->quantity < $this->activeVariationItem->in_stock) $this->quantity++;
        }else if($this->quantity < $this->activeVariation->in_stock){
            $this->quantity++;
        }
    }

    public function decreaseQuantity()
    {
        if($this->quantity > 1) $this->quantity--;
    }

    public function setVariationItem($variationItemId)
    {
        $this->activeVariationItem = $this->activeVariation->variationItems->firstWhere('id', $variationItemId);

        $this->size = $this->activeVariationItem->id;

        $this->setupQuantity();
    }

    public function addToCart()
    {
        $this->addToBasket($this->activeVariation, $this->activeVariationItem, $this->quantity);
    }

    public function addToWishlist()
    {
        $this->addToFavorites($this->activeVariation, $this->activeVariationItem, \App\Variation::find($this->activeVariation['id'])->path());
    }

    protected function addToViewedVariations($id)
    {
        $viewedVariationIds = Session::get('viewedVariationIds', []) ?? [];

        $index = array_search($id, $viewedVariationIds);

        if($index !== false){
            array_splice($viewedVariationIds, $index, 1);
        }

        array_unshift($viewedVariationIds, $id);

        if(count($viewedVariationIds) > 10) array_pop($viewedVariationIds);

        Session::put('viewedVariationIds', $viewedVariationIds);
    }

    public function render()
    {
        return view('livewire.variation');
    }
}
