<?php

namespace App\Http\Controllers;

use App\FaqCategory;
use App\Question;
use Illuminate\Http\Response;

class FaqController extends Controller
{
    /**
     * @param null|string $faq
     * @return Response
     */
    public function __invoke($faq = null)
    {
        $activeQuestion = null;
        $activeCategory = null;
        $faqCategories = FaqCategory::with('questions')->get();

        if ($faq) {
            switch (count($faq = explode('/', $faq))) {
                case 1:
                    {
                        $activeCategory = FaqCategory::where('slug', $faq[0])->firstOrFail();
                    }
                    break;

                case 2:
                    {
                        $activeCategory = FaqCategory::where('slug', $faq[0])->firstOrFail();
                        $activeQuestion = Question::where('slug', $faq[1])->firstOrFail();
                    }
                    break;
            }
        }

        return response()->view('faq.index', compact(
            'faqCategories',
                'activeCategory',
                'activeQuestion'
            )
        );
    }
}
