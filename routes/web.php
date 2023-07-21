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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/collections/watches', function (){
    return view('collections.watches'); 
})->name('collections.watches');

Route::get('collections/pre-owned', function (){
    return view('collections/pre-owned');
})->name('collections.pre-owned');

Route::get('/collections/jewelry', function (){
    return view('collections.jewelry');
})->name('collections.jewelry');

Route::get('/pages/about-topper', function (){
    return view('pages.about-topper');
})->name('pages.about-topper');

Route::get('/pages/contact-us', function (){
    return view('pages.contact-us');
})->name('pages.contact-us');

Route::get('/blogs/topper-blog', function (){
    return view('blogs.topper-blog');
})->name('blogs.topper-blog');