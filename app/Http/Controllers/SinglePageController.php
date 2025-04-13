<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Event;
use App\Models\Job;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Publication;
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
        $posts = Blog::where('status', 'published')->orderBy('published_date', 'desc')->get();
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
            ->orderBy('deadline', 'asc')
            ->paginate(2);

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
        $teams = Team::where('status', 'published')->where('staff_type', operator: 'staff')->orderBy('created_at', 'desc')->get();
        return view('pages.singles.team-list', compact('teams'));
    }

    public function listBoard()
    {
        $boards = Team::where('status', 'published')->where('staff_type', 'board_member')->orderBy('created_at', 'desc')->get();
        return view('pages.singles.board-list', compact('boards'));
    }


    public function listPublications()
    {
        $publications = Publication::where('status', 'published')->orderBy('created_at', 'desc')->get();
        return view('pages.singles.publication-list', compact('publications'));
    }

    public function showProject($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('pages.singles.project', compact('project'));
    }

    // listTeam
    public function listProject()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('pages.singles.project-list', compact('projects'));
    }

    public function showEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('pages.singles.event', compact('event'));
    }

    // listTeam
    public function listEvent()
    {
        $events = Event::orderBy('start_date', 'desc')->get();
        return view('pages.singles.event-list', compact('events'));
    }
}
