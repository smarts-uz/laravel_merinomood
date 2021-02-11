<?php

namespace App\Http\Livewire;

use App\Favorite;
use App\Http\Livewire\Traits\WithBasket;
use App\Http\Livewire\Traits\WithFavorites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Wishlist extends Component
{
    use WithFavorites, WithBasket;

    public function variationName($favorite)
    {
        return $favorite['variation']['product']['name'] . ' (' . $favorite['variation']['color'] . ') ' . ($favorite['variation_item'] ? $favorite['variation_item']['size'] : '');
    }

    public function price($favorite)
    {
        if($favorite['variation_item']){

            return $favorite['variation_item']['price'];
        }

        return $favorite['variation']['price'];
    }

    public function addToCart($index)
    {
        $favorite = $this->favorites[$index];

        if($favorite['variation_item_id']){
            $quantity = $favorite['variation_item']['in_stock'] ? 1 : 0;
        }else{
            $quantity = $favorite['variation']['in_stock'] ? 1 : 0;
        }

        $this->addToBasket($favorite['variation'], $favorite['variation_item'], $quantity);
    }

    public function render()
    {
        return view('livewire.wishlist');
    }
}
