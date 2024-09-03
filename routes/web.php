<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\NewsController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
    Route Guest / User
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/archive', [ArsipController::class, 'index'])->name('archive');
Route::get('/topic/{name}', [TopicController::class, 'topic'])->name('topic');
Route::view('/tes', 'page.tes');
Route::get('/news/{id}', [NewsController::class, 'detail'])->name('news');
// Route::get('/topic', [TopicController::class, 'index']);

// Route::view('/topic', 'page.topic');
// Route::view('/archive', 'page.archive0');
// Route::view('/about', 'page.about');


// Route::get('/', [HomeController::class, 'index']);

// Route::get('/topic', function () {
//     return view('page.topic');
// });

// Route::get('/archive', function () {
//     return view('page.archive0');
// });

// Route::get('/about', function () {
//     return view('page.about');
// });

// Route::get('/tes', function () {
//     return view('page.tes');
// });

// Route::get('/news', function () {
//     return view('page.news');
// });

Route::get('/posts/latest', [PostController::class, 'getLatestPost']);

Route::get('/categories', [CategoryController::class, 'index']);