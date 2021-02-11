<?php

namespace App\Http\Livewire;

use App\Brand;
use Livewire\Component;

class Brands extends Component
{
    public $perPage = 7;
    protected $listeners = ['loadMore'];

    public function loadMore()
    {
        $this->perPage = $this->perPage + 7;
    }

    public function render()
    {
        $brands = Brand::latest()->paginate($this->perPage);

        return view('livewire.brands',['brands' => $brands]);
    }
}
