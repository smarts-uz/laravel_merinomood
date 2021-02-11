<?php

namespace App\Http\Controllers\Catalog;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function __invoke($category)
    {
        $slugs = explode('/', $category);
        $slug = end($slugs);

        $category = Category::where('slug', $slug)->firstOrFail();

        return view('catalog', ['category' => $category]);
    }
}
