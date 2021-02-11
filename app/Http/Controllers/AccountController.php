<?php

namespace App\Http\Controllers;


use App\Variation;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function __invoke()
    {
        $viewedVariationIds = Session::get('viewedVariationIds', []) ?? [];

        $unorderedViewedVariations = Variation::withMinimumPrice()
            ->whereIn('id', $viewedVariationIds)
            ->with('product')->get();

        $viewedVariations = [];

        foreach ($viewedVariationIds as $viewedVariationId){
            $viewedVariations[] = $unorderedViewedVariations->firstWhere('id', $viewedVariationId);
        }

        return view('account.profile', compact('viewedVariations'));
    }
}
