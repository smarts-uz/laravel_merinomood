<?php

namespace App\Http\Livewire\Traits;


use Illuminate\Support\Facades\Session;

trait WithBasket
{
    public $basket = [];

    public function initializeWithBasket()
    {
        $this->basket = Session::get('basket', []) ?? [];
    }

    public function inBasket($variation, $variationItem)
    {
        if($variationItem){

            return array_search($variationItem['id'], array_column($this->basket, 'variation_item_id')) !== false;
        }

        $index = array_search($variation['id'], array_column($this->basket, 'variation_id'));

        if($index !== false){
            return !$this->basket[$index]['variation_item_id'];
        }

        return false;
    }

    public function addToBasket($variation, $variationItem, $quantity)
    {
        $basketItem = [
            'variation_id' => $variation['id'],
            'variation_item_id' => $variationItem ? $variationItem['id'] : null,
            'quantity' => $quantity
        ];

        Session::push('basket', $basketItem);
        $this->basket[] = $basketItem;
        $this->emit('basketUpdated');
    }

    public function deleteFromBasket($index)
    {
        array_splice($this->basket, $index, 1);
        Session::put('basket', $this->basket);
        $this->emit('basketUpdated');
    }

    public function updateBasket()
    {
        Session::put('basket', $this->basket);
    }
}
