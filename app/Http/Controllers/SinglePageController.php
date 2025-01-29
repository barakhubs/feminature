<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Job;
use App\Models\Partner;
use App\Models\Team;
use App\Models\ThematicArea;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function showBlog($slug)
    {
        $post = Blog::where('slug', $slug)->first();
        $posts = Blog::where('status', 'published')
            ->whereNot('slug', $slug)
            ->take(3)
            ->orderBy('created_at', 'desc')
            ->get();
        $categories = BlogCategory::where('status', 1)->get();
        return view('pages.singles.blog', compact('post', 'categories', 'posts'));
    }

    public function list ()
    {
        $posts = Blog::where('status', 'published')->orderBy('created_at', 'desc')->get();
        $categories = BlogCategory::where('status', 1)->get();
        return view('pages.singles.blog-list', compact('posts', 'categories'));
    }

    public function search ()
    {
        $search = request()->get('search');
        $posts = Blog::where('status', 'published')
            ->where('title', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->orderBy('created_at', 'desc')
            ->get();
        $categories = BlogCategory::where('status', 1)->get();
        return view('pages.singles.blog-list', compact('posts', 'categories'));
    }

    public function showCategory($slug)
    {
        $category = BlogCategory::where('slug', $slug)->first();
        $posts = $category->blogs()->where('status', 'published')->orderBy('created_at', 'desc')->get();

        return view('pages.singles.category-blog-list', compact('posts', 'category'));
    }

    public function showThematicArea($slug)
    {
        $thematicArea = ThematicArea::where('slug', $slug)->first();
        $partners = Partner::where('status', 1)->orderBy('created_at', 'desc')->take(10)->get();

        return view('pages.singles.thematic-area', compact('thematicArea', 'partners'));
    }

    public function listThematicArea ()
    {
        $thematicAreas = ThematicArea::where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('pages.singles.thematic-area-list', compact('thematicAreas'));
    }

    public function listOpportunities()
    {
        $jobs = Job::where('status', 'published')
            ->orderBy('dealine', 'asc')
            ->get();

        return view('pages.singles.jobs-list', compact('jobs'));
    }

    public function showOpportunity($slug)
    {
        $job = Job::where('slug', $slug)->first();
        $relatedJobs = Job::where('status', 'published')->where('job_category_id', $job->job_Category_id)->orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.singles.job', compact('job', 'relatedJobs'));
    }

    // listTeam
    public function listTeam()
    {
        $teams = Team::where('status', 'published')->orderBy('created_at', 'desc')->get();
        return view('pages.singles.team-list', compact('teams'));
    }


}
