<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AnimationText;
use App\Models\Counter;
use App\Models\SocialIcon;
use App\Models\Tag;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $animationTexts = AnimationText::all();
        $tags = Tag::all();
        $socialIcons = SocialIcon::all();
        $counters = Counter::all();
        $about = About::first();
        return view('frontend.home.index', compact('animationTexts', 'tags', 'socialIcons', 'counters', 'about'));
    }
}
