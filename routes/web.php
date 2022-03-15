<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
    "title" => "Contact"
    ]);
});

Route::get('/dinning', function () {
    return view('dinning', [
    "title" => "Dinning"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
    "title" => "Gallery"
    ]);
});

Route::get('/news', function () {
    return view('news', [
    "title" => "News"
    ]);
});

Route::get('/rooms', function () {
    return view('rooms', [
    "title" => "Rooms"
    ]);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
