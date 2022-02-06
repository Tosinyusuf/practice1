<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontImage;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Article;

class FrontendController extends Controller
{
    public function frontimg() 
    {
        $frontimgs = FrontImage::all()->first();
        $articles = Article::all()->first();
        $sections = Section2::all()->first();
        $section3 = Section3::all();
    //  dd($frontimgs->title);
        return view('frontend/welcome', [
            'frontimgs' => $frontimgs,
            'articles' => $articles,
            'sections' => $sections,
            'section3' => $section3
        ]);
    }


}
