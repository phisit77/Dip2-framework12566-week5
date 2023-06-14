<?php

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
//http://127.0.0.1:8000/
// Route::get('/', function () {
//     return view('welcome');
// });

//http://127.0.0.1:8000/app
Route::get('/', function () {
    return view('app');
})->name('app');



Route::prefix('page')->group(function () {
//http://127.0.0.1:8000/about
Route::get('/about', function () {
    return view ('pages/about');
})->name('about');

//http://127.0.0.1:8000/contact
Route::get('contact', function () {
    return view('pages/contact');
})->name('contact');

//http://127.0.0.1:8000/post
Route::get('post', function () {
    return view('pages/post');
})->name('post');

//http://127.0.0.1:8000/link
Route::get('link', function () {
    return view('pages/link');
})->name('link');    
});