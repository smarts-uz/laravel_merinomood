<?php

namespace App\Http\Livewire;

use App\Support\Constants\OrderStatus;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function status($order)
    {
        switch ($order->status){
            case OrderStatus::NEW : return [
                'label' => OrderStatus::label(OrderStatus::NEW),
                'color' => 'blue'
            ];
            case OrderStatus::PENDING : return [
                'label' => OrderStatus::label(OrderStatus::PENDING),
                'color' => 'orange'
            ];
            case OrderStatus::COMPLETED : return [
                'label' => OrderStatus::label(OrderStatus::COMPLETED),
                'color' => 'green'
            ];
            case OrderStatus::CANCELLED : return [
                'label' => OrderStatus::label(OrderStatus::CANCELLED),
                'color' => 'red'
            ];
        }
    }

    public function bonus($order)
    {
        return array_reduce($order->orderVariations->toArray(), function ($carry, $orderVariation){

            return $carry += array_reduce($orderVariation['points'], function ($carry, $point){

                return $carry += $point['value'];
            });
        });
    }

    public function refreshOrders()
    {
        $this->emit('scrollTo', '#order');
    }

    public function previousPage()
    {
        $this->page = $this->page - 1;

        $this->refreshOrders();
    }

    public function nextPage()
    {
        $this->page = $this->page + 1;

        $this->refreshOrders();
    }

    public function gotoPage($page)
    {
        $this->page = $page;

        $this->refreshOrders();
    }

    public function paginationView()
    {
        return 'components.pagination-links';
    }

    public function render()
    {
        return view('livewire.orders', [
            'orders' => $this->user->orders()
                ->with(['orderVariations.points' => function($query){
                    $query->where('type', 'reward');
                }, 'orderVariations.variation.product', 'orderVariations.variationItem'])
                ->paginate(5)
        ]);
    }
}
