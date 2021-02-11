<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAddress;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Address extends Component
{
    use WithAddress;

    public $user;

    protected $listeners = ['deleteAddress' => 'delete'];

    public function mount()
    {
        $this->user = Auth::user();

        $this->setupAddress();
    }

    public function render()
    {
        return view('livewire.address');
    }
}
