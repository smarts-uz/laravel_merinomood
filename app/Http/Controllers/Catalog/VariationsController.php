<?php

namespace App\Http\Controllers\Catalog;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Variation;
use Illuminate\Http\Request;

class VariationsController extends Controller
{
    public function __invoke($product, $sku)
    {
        $product = Product::where('slug', $product)
            ->with('category', 'brand', 'specifications', 'variations.media', 'variations.variationItems')
            ->firstOrFail();

        $parentCategories = Category::ancestorsAndSelf($product->category_id)->toArray();
        $slug = '/catalog';
        foreach ($parentCategories as $key => $aCategory){
            $slug .= '/' . $aCategory['slug'];
        }
        $product->category->slug = $slug;

        $similarVariations = Variation::similar($product)->take(5)->get();

        return view('product', compact('product','sku', 'similarVariations'));
    }
}
