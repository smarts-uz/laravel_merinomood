<?php

namespace App\Http\Livewire;

use App\State;
use Carbon\Carbon;
use Livewire\Component;

class Delivery extends Component
{
    public $stateOptions;
    public $activeState;
    public $state;

    public function mount()
    {
        $this->stateOptions = State::whereHas('shippings')->with('shippings')->get();
    }

    public function updatedState($value)
    {
        $this->activeState = $this->stateOptions->firstWhere('id', $value);
        $this->dispatchBrowserEvent('state-changed');
    }

    public function deliveryDate($shipping)
    {
        return Carbon::now()->addDays($shipping->duration)->format('D, M d, Y');
    }

    public function render()
    {
        return view('livewire.delivery');
    }
}
