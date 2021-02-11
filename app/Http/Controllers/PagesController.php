<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Brand;
use App\Category;
use App\Post;
use App\Product;
use App\Variation;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home()
    {
        $promoBanner = Banner::where('type', 'promo')->first();
        $homeBanner = Banner::where('type', 'home')->first();

        $categories = Category::where('parent_id', null)->take(5)->get();

        $newProducts = Product::has('variations')
            ->with(['variations' => function($query){
                $query->withMinimumPrice();
            }])->take(4)->latest()->get();

        $popularVariations = Variation::withMinimumPrice()->with('product')->where('popular', true)->take(8)->get();

        $posts = Post::latest()->take(2)->get();

        return view('home', compact(
            'promoBanner',
                'homeBanner',
                'categories',
                'newProducts',
                'popularVariations',
                'posts'
            )
        );
    }
}
