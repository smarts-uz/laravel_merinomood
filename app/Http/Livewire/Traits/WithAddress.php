<?php

namespace App\Http\Livewire\Traits;

use App\State;
use Illuminate\Support\Facades\Auth;

trait WithAddress
{
    public $view;
    public $address;
    public $stateOptions;

    public function initializeWithAddress()
    {
        $this->setupStateOptions();
    }

    public function setupStateOptions()
    {
        $this->stateOptions = State::all();
    }

    public function setupAddress()
    {
        $newAddress = $this->user->address()->first();

        $this->view = $newAddress ? 'detail' : 'empty';

        $this->address = [
            'name' => $this->user->name,
            'phone' => optional($newAddress)->phone,
            'country' => $newAddress ? $newAddress->country : 'United States',
            'state_id' => optional($newAddress)->state_id,
            'city' => optional($newAddress)->city,
            'address' => optional($newAddress)->address,
            'postcode' => optional($newAddress)->postcode
        ];
    }

    public function getStateLabelProperty()
    {
        return $this->stateOptions->firstWhere('id', $this->address['state_id'])->name;
    }

    public function changeView($value)
    {
        $this->view = $value;
    }

    public function submit()
    {
        $data = $this->validateAddress();

        $this->user->name = $this->address['name'];
        $this->user->save();

        if($this->user->address){
            $this->user->address->update($data['address']);
        }else{
            $this->user->address()->create($data['address']);
        }

        $this->setupAddress();
    }

    public function delete()
    {
        $this->user->address->delete();
        $this->setupAddress();
    }

    public function validateAddress()
    {
        return $this->validate([
            'address.name' => 'required',
            'address.phone' => 'required|regex:/^\+1\s[0-9]{3}\s[0-9]{3}\s[0-9]{4}$/',
            'address.country' => 'required',
            'address.state_id' => 'required',
            'address.city' => 'required',
            'address.address' => 'required',
            'address.postcode' => 'required'
        ], [
            'address.name.required' => 'The name field is required.',
            'address.phone.required' => 'The phone field is required.',
            'address.phone.regex' => 'The phone format is invalid.',
            'address.country.required' => 'The country field is required.',
            'address.state_id.required' => 'The state field is required.',
            'address.city.required' => 'The city field is required.',
            'address.address.required' => 'The address field is required.',
            'address.postcode.required' => 'The postcode field is required.',
        ]);
    }
}
