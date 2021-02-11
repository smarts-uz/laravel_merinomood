<?php

use App\Banner;
use App\Post;
use App\Support\Constants\BannerType;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, rand(10, 20))->create();
        factory(Banner::class)->create([
            'type' => BannerType::POSTS
        ]);
    }
}
