<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\ThematicArea;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index ()
    {
        $sliders = Slider::where('status', 'published')->orderBy('created_at', 'desc')->take(3)->get();
        $posts = Blog::where('status', 'published')->orderBy('created_at', 'desc')->take(3)->get();
        $testimonials = Testimonial::where('status', 'published')->orderBy('created_at', 'desc')->take(3)->get();
        $thematicAreas = ThematicArea::where('status', 1)->orderBy('created_at', 'desc')->take(3)->get();

        return view('home', compact('sliders', 'posts', 'testimonials', 'thematicAreas'));
    }
}
