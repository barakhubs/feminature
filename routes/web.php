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


Route::get('/opportunities', [SinglePageController::class, 'listOpportunities'])->name('jobs.list');
Route::get('/opportunities/{slug}', [SinglePageController::class, 'showOpportunity'])->name('jobs.show');

Route::get('/our-teams', [SinglePageController::class, 'listTeam'])->name('team.list');
