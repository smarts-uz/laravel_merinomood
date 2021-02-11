<?php

namespace App\Observers;

use App\Variation;

class VariationObserver
{
    public function creating(Variation $variation)
    {
        do {
            $variation->sku = mt_rand(1000000, 9999999);
        } while (Variation::where('sku', $variation->sku)->exists());
    }
}
