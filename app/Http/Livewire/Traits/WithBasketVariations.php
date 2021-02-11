<?php

namespace App\Http\Livewire\Traits;


use App\Variation;
use App\VariationItem;

trait WithBasketVariations
{
    public $variations = [];

    public function initializeWithBasketVariations()
    {
        $this->setupVariations();
    }

    protected function setupVariations()
    {
        foreach ($this->basket as $basketItem){

            $variation = Variation::with('product')->where('id', $basketItem['variation_id'])->first();

            $variation['variationItem'] = VariationItem::find($basketItem['variation_item_id']);
            $variation['quantity'] = $basketItem['quantity'];

            $this->variations[] = $variation;
        }
    }

    public function getTotalPriceProperty()
    {
        return array_reduce($this->variations, function ($carry, $variation){

            return $carry += $this->price($variation) * $variation['quantity'];
        });
    }

    public function variationName($variation)
    {
        return $variation['product']['name'] . ($variation['color'] ? ' (' . $variation['color'] . ')' : '');
    }

    public function price($variation)
    {
        if($variation['variationItem']){

            return $variation['variationItem']['price'];
        }

        return $variation['price'];
    }

    public function deleteFromCart($index)
    {
        array_splice($this->variations, $index, 1);
        $this->deleteFromBasket($index);
    }
}
