<?php

namespace App\Observers;

use App\Order;

class OrderObserver
{
    public function updated(Order $order)
    {
        if($order->isDirty('paid') && $order->paid){

            $order->orderVariations->each->applyCashback();
        }
    }
}
