<?php

namespace App\View\Components\Partials;

use App\Banner;
use App\Category;
use Illuminate\View\Component;

class Header extends Component
{
    public $page;
    public $categories;
    public $parentCategories;
    public $catalogBanner;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($page = null)
    {
        $this->page = $page;
        $this->categories = Category::get()->toTree();
        $this->parentCategories = [];
        $this->catalogBanner = Banner::where('type', 'catalog')->first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.partials.header');
    }
}
