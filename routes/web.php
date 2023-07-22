<?php

use App\Http\Controllers\About_TopperController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\Newest_WatchesController;
use App\Http\Controllers\Pre_OwnedController;
use App\Http\Controllers\Topper_BlogController;
use App\Http\Controllers\WatchesController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Prefix Collections Route Group

Route::prefix('collections')->group(function(){
    //Watches Controller
    Route::get('/watches', [WatchesController::class, 'index'])->name('collections.watches');
    //Pre Owned Controller
    Route::get('/pre-owned', [Pre_OwnedController::class, 'index'])->name('collections.pre-owned');
    //Jewelry Controller
    Route::get('/jewelry', [JewelryController::class, 'index'])->name('collections.jewelry');
    // Newest-watches
    Route::get('/newest-watches', [Newest_WatchesController::class, 'index'])->name('collections.newest-watches');
});

//Prefix Pages Route Group
Route::prefix('pages')->group(function(){
    //About-Topper Controller
    Route::get('/about-topper', [About_TopperController::class, 'index'])->name('pages.about-topper');
    //Contact Us COntrolller
    Route::get('/contact-us', [Contact_UsController::class, 'index'])->name('pages.contact-us');
});

Route::prefix('blogs')->group(function(){
    //TopperBlog Controller
    Route::get('/topper-blog', [Topper_BlogController::class, 'index'])->name('blogs.topper-blog');
});