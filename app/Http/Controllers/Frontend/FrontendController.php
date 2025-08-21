<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AnimationText;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $animationTexts = AnimationText::all();
        return view('frontend.home.index', compact('animationTexts'));
    }
}
