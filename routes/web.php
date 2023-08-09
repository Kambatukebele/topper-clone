<?php

use App\Http\Controllers\About_TopperController;
use App\Http\Controllers\Bill_caplanController;
use App\Http\Controllers\Contact_UsController;
use App\Http\Controllers\FinancingController;
use App\Http\Controllers\Gold_platinum_buyingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JewelryController;
use App\Http\Controllers\Newest_WatchesController;
use App\Http\Controllers\Pre_OwnedController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Synchrony_financingController;
use App\Http\Controllers\Topper_BlogController;
use App\Http\Controllers\Watch_jewelry_trade_inController;
use App\Http\Controllers\WatchesController;
use App\Http\Controllers\Wells_fargo_financingController;
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
    //Product
    Route::get('/watches/products', [ProductsController::class, 'index'])->name('collections.products');
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
    //gold-platinum-buying
    Route::get('/gold-platinum-buying', [Gold_platinum_buyingController::class, 'index'])->name('pages.gold-platinum-buying'); 
    //watch-jewelry-trade-in
    Route::get('/watch-jewelry-trade-in', [Watch_jewelry_trade_inController::class, 'index'])->name('pages.watch-jewelry-trade-in');
    //Financing
    Route::get('/financing', [FinancingController::class, 'index'])->name('pages.financing'); 
    //bill-caplan
    Route::get('/bill-caplan', [Bill_caplanController::class, 'index'])->name('pages.bill-caplan');
    //wells-fargo-financing
    Route::get('/wells-fargo-financing', [Wells_fargo_financingController::class, 'index'])->name('pages.wells-fargo-financing');
    //synchrony-financing
    Route::get('/synchrony-financing', [Synchrony_financingController::class, 'index'])->name('pages.synchrony-financing');
});

Route::prefix('blogs')->group(function(){
    //TopperBlog Controller
    Route::get('/topper-blog', [Topper_BlogController::class, 'index'])->name('blogs.topper-blog');
    //Read one article topper-blog-show
    Route::get('/topper-blog/topper-blog-show/', [Topper_BlogController::class, 'show'])->name('blogs.topper-blog');
});