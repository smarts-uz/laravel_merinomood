<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HeaderBasket extends Component
{
    public $basketQuantity;

    protected $listeners = ['basketUpdated'];

    public function mount()
    {
        $this->basketUpdated();
    }

    public function basketUpdated()
    {
        $this->basketQuantity = count(Session::get('basket', []) ?? []);
    }

    public function render()
    {
        return view('livewire.header-basket');
    }
}
