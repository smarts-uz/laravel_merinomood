<?php

namespace App\Http\Livewire\Traits;

use App\Favorite;
use App\Variation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

trait WithFavorites
{
    public $user;
    public $favorites = [];

    public function initializeWithFavorites()
    {
        $this->setupFavorites();
    }

    protected function setupFavorites()
    {
        $this->user = Auth::user();

        $this->favorites = $this->user ? $this->user->favorites()->with('variation.product', 'variationItem')->get()->toArray() : [];
    }

    public function inFavorites($variation, $variationItem)
    {
        if($variationItem){

            return array_search($variationItem['id'], array_column($this->favorites, 'variation_item_id')) !== false;
        }

        $index = array_search($variation['id'], array_column($this->favorites, 'variation_id'));

        if($index !== false){
            return !$this->favorites[$index]['variation_item_id'];
        }

        return false;
    }

    public function addToFavorites($variation, $variationItem, $url)
    {
        if (!$this->user) {
            Session::put('url.intended', $url);
            return redirect()->to('/login');
        }

        $favorite = Favorite::create([
            'user_id' => $this->user->id,
            'variation_id' => $variation['id'],
            'variation_item_id' => $variationItem ? $variationItem['id'] : null
        ]);

        $this->favorites[] = $favorite;
    }

    public function deleteFromFavorites($index)
    {
        Favorite::destroy($this->favorites[$index]['id']);

        array_splice($this->favorites, $index, 1);
    }
}
