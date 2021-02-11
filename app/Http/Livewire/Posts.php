<?php

namespace App\Http\Livewire;

use App\Banner;
use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public function hydrate()
    {
        $this->emit('scrollTo', '#posts');
    }

    public function paginationView()
    {
        return 'components.pagination-links';
    }

    public function render()
    {
        $banner = Banner::where('type', 'posts')->first();
        $posts = Post::latest()->paginate(4);

        return view('livewire.posts', compact(
                'posts',
                'banner'
            )
        );
    }
}
