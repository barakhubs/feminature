<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\SinglePageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/', [HomePageController::class, 'index'])->name('home');

// single pages
Route::get('/blog/{slug}', [SinglePageController::class, 'showBlog'])->name('blog.show');
Route::get('/latest-news', [SinglePageController::class, 'list'])->name('blog.list');
// search route
Route::get('/search', [SinglePageController::class, 'search'])->name('search');
Route::get('/category/{slug}', [SinglePageController::class, 'showCategory'])->name('category.show');

Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');


Route::get('/thematic-areas/{slug}', [SinglePageController::class, 'showThematicArea'])->name('thematic-area.show');
Route::get('/thematic-areas', [SinglePageController::class, 'listThematicArea'])->name('thematic-area.list');

Route::get('/projects/{slug}', [SinglePageController::class, 'showProject'])->name('project.show');
Route::get('/projects', [SinglePageController::class, 'listProject'])->name('project.list');

Route::get('/opportunities', [SinglePageController::class, 'listOpportunities'])->name('jobs.list');
Route::get('/opportunities/{slug}', [SinglePageController::class, 'showOpportunity'])->name('jobs.show');


Route::get('/events', [SinglePageController::class, 'listEvent'])->name('events.list');
Route::get('/event/{slug}', [SinglePageController::class, 'showEvent'])->name('events.show');

// publications
Route::get('/publications', [SinglePageController::class, 'listPublications'])->name('publications.list');
Route::get('/publications/{slug}', [SinglePageController::class, 'showPublication'])->name('publications.show');

Route::get('/our-team', [SinglePageController::class, 'listTeam'])->name('team.list');
Route::get('/our-board', [SinglePageController::class, 'listBoard'])->name('board.list');
Route::get('/contact', [HomePageController::class, 'contact'])->name('contact');
Route::get('/about', [HomePageController::class, 'about'])->name('about');
Route::get('/testimonials', [HomePageController::class, 'testimonials'])->name('testimonials');
Route::get('/gallery', [HomePageController::class, 'gallery'])->name('gallery');
