<?php

namespace App\Http\Livewire;

use App\Favorite;
use App\Http\Livewire\Traits\WithBasket;
use App\Http\Livewire\Traits\WithBasketVariations;
use App\Http\Livewire\Traits\WithFavorites;
use App\VariationItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Variation;

class Basket extends Component
{
    use WithFavorites, WithBasket, WithBasketVariations;

    public $url;

    public function mount()
    {
        $this->url = request()->url();
    }

    public function addToWishlist($index)
    {
        $this->addToFavorites($this->variations[$index], $this->variations[$index]['variationItem'], $this->url);
    }

    public function increaseQuantity($index)
    {
        if($this->variations[$index]['variationItem']){
            if($this->variations[$index]['quantity'] < $this->variations[$index]['variationItem']['in_stock']) {
                $this->variations[$index]['quantity']++;
                $this->basket[$index]['quantity']++;
            }
        }else if($this->variations[$index]['quantity'] < $this->variations[$index]['in_stock']){
            $this->variations[$index]['quantity']++;
            $this->basket[$index]['quantity']++;
        }

        $this->updateBasket();
    }

    public function decreaseQuantity($index)
    {
        if($this->variations[$index]['quantity'] > 1) {
            $this->variations[$index]['quantity']--;
            $this->basket[$index]['quantity']--;
        }

        $this->updateBasket();
    }

    public function render()
    {
        return view('livewire.basket');
    }
}
