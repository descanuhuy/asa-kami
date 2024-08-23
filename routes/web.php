<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('page.home');
});

Route::get('/topic', function () {
    return view('page.topic');
});

// Route::get('/archive', function () {
//     return view('page.archive');
// });

Route::get('/archive', function () {
    return view('page.archive0');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/news', function () {
    return view('page.news');
});

Route::get('/categories', [CategoryController::class, 'index']);