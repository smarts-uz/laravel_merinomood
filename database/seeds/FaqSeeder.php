<?php

use App\FaqCategory;
use App\Question;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FaqCategory::class, rand(3, 7))->create()->each(function ($faqCategory) {
            $faqCategory->questions()->saveMany(factory(Question::class, rand(2, 5))->make());
        });
    }
}
