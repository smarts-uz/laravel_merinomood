<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Admin\Category as CategoryResource;
use App\Category;
use Arniro\Admin\Http\Requests\AdminRequest;
use Illuminate\Support\Arr;

class CategoriesController extends Controller
{
    public function index()
    {
        return CategoryResource::fetch(Category::where('parent_id', null));
    }

    public function destroy($ids, AdminRequest $request)
    {
        $ids = Arr::wrap(explode(',', $ids));

        Category::destroy($ids);

        return CategoryResource::fetch(
            $request->isViaResource() ? $request->viaRelationship() : Category::where('parent_id', null)
        );
    }
}
