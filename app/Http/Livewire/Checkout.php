<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Traits\WithAddress;
use App\Http\Livewire\Traits\WithBasket;
use App\Http\Livewire\Traits\WithBasketVariations;
use App\Order;
use App\Variation;
use App\VariationItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Checkout extends Component
{
    use WithAddress, WithBasket, WithBasketVariations;

    public $user;
    public $email;
    public $state;
    public $shipping;

    public function mount()
    {
        $this->user = Auth::user();

        $this->setupAddress();

        $this->setupEmail();

        $this->setupState();
    }

    public function setupEmail()
    {
        $this->email = $this->user->email;
    }

    public function setupState()
    {
        $this->state = $this->stateOptions->firstWhere('id', $this->address['state_id']);
        $this->shipping = $this->state ? $this->state->shippings()->where('type', 'standard')->first() : null;
    }

    public function getShippingCostProperty()
    {
        return $this->shipping->cost ?? 0;
    }

    public function getTotalTaxProperty()
    {
        return round(optional($this->state)->tax * $this->totalPrice / 100, 2);
    }

    public function updated($field)
    {
        $this->validateOnly($field, [
            'email' => 'email'
        ]);
    }

    public function submit()
    {
        $this->validateAddress();

        $this->setupState();

        $this->view = 'detail';
    }

    public function delete()
    {
        $this->address = [
            'name' => '',
            'phone' => '',
            'country' => 'United States',
            'state_id' => '',
            'city' => '',
            'address' => '',
            'postcode' => ''
        ];

        $this->setupState();

        $this->view = 'empty';
    }

    public function sum($variation)
    {
        return $this->price($variation) * $variation['quantity']  + round(optional($this->state)->tax * ($this->price($variation)* $variation['quantity']) / 100, 2);
    }

    public function createOrder()
    {
        $this->validate([
            'email' => 'required|email'
        ]);

        $this->storeOrder();

        Session::forget('basket');

        return redirect()->to('/account/orders');
    }

    protected function storeOrder()
    {
        $lastOrder = Order::orderBy('index', 'desc')->first();
        $index = $lastOrder ? $lastOrder->index + 1 : 1000000;

        $order = Order::create([
            'index' => $index,
            'user_id' => $this->user->id,
            'email' => $this->email,
            'name' => $this->address['name'],
            'phone' => $this->address['phone'],
            'state' => $this->stateLabel,
            'city' => $this->address['city'],
            'address' => $this->address['address'],
            'postcode' => $this->address['postcode'],
            'status' => 'new',
            'paid' => false,
            'amount' => $this->totalPrice + $this->shippingCost + $this->totalTax
        ]);

        $this->storeOrderVariations($order);
    }

    protected function storeOrderVariations($order)
    {
        foreach ($this->variations as $variation) {
            $order->orderVariations()
                ->create([
                    'variation_id' => $variation['id'],
                    'variation_item_id' => $variation['variationItem'] ? $variation['variationItem']['id'] : null,
                    'quantity' => $variation['quantity'],
                    'sum' => $this->sum($variation)
                ]);

            $this->reduceInStock($variation);
        }
    }

    protected function reduceInStock($variation)
    {
        if($variation['variationItem']){
            $dbVariationItem = VariationItem::find($variation['variationItem']['id']);
            $dbVariationItem->in_stock -= $variation['quantity'];
            $dbVariationItem->save();

            return;
        }

        $dbVariation = Variation::find($variation['id']);
        $dbVariation->in_stock -= $variation['quantity'];
        $dbVariation->save();
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
