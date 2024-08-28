<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TopicController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/archive', [ArsipController::class, 'index']);
// Route::get('/topic', [TopicController::class, 'index']);
Route::get('/topic/{name}', [TopicController::class, 'topic']);
// Route::view('/topic', 'page.topic');
// Route::view('/archive', 'page.archive0');
// Route::view('/about', 'page.about');
Route::view('/tes', 'page.tes');
Route::view('/news', 'page.news');

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