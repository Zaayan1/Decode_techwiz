<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
    return view('index');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/products', [ProductController::class, 'index']);
Route::get('/news', function () {
    return view('news');
});
Route::get('/info', function () {
    return view('soccerinfo');
});
Route::get('/matches', function () {
    return view('matches');
});
Route::get('/players', function () {
    return view('players');
});
// Correct namespace structure
Route::get('/add-product', 'App\Http\Controllers\ProductController@create')->name('store-product');
Route::post('/add-product', 'App\Http\Controllers\ProductController@store')->name('store-product');

Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RegisterController@register');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::resource('soccerinfo', 'SoccerinfoController');

Route::resource('soccerinfo', 'SoccerinfoController');

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('players', 'Admin\AdminPlayerController');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::resource('players', 'Admin\AdminPlayerController');
    Route::resource('teams', 'Admin\AdminTeamController');
    Route::resource('matches', 'Admin\AdminMatchController');
    Route::resource('statistics', 'Admin\AdminStatisticController');
});
// admin routes
Route::get('/index-admin', function () {
    return view('index-admin');
});

Route::get('/soccerinfo-admin', function () {
    return view('soccerinfo-admin');
});

Route::get('/statistics-admin', function () {
    return view('statistics-admin');
});

Route::get('/newsupdate-admin', function () {
    return view('/newsupdate-admin');
});

Route::get('/myprofile-admin', function () {
    return view('myprofile-admin');
});

Route::get('/top10score-admin', function () {
    return view('top10score-admin');
});

Route::get('/setting-admin', function () {
    return view('setting-admin');
});

Route::get('/chart-admin', function () {
    return view('chart-admin');
});

Route::get('/playergallery-admin', function () {
    return view('playergallery-admin');
});



Route::get('/matches-admin', function () {
    return view('matches-admin');
});
// admin routes endpoint


Route::middleware('auth')->group(function () {
    Route::get('/carts', 'CartController@viewCart')->name('carts.index');
    Route::post('/carts/add/{productId}', 'CartController@addToCart')->name('carts.add');
    Route::delete('/carts/remove/{cartItemId}', 'CartController@removeFromCart')->name('carts.remove');
    Route::post('/carts/checkout', 'CartController@checkout')->name('carts.checkout');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // ...
    Route::get('/carts', 'Admin\AdminCartController@viewUserCarts')->name('admin.carts.index');
});
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // ...
    Route::post('/orders/cancel/{orderId}', 'Admin\AdminOrderController@cancelOrder')->name('admin.orders.cancel');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // ...
    Route::resource('feedbacks', 'Admin\AdminFeedbackController');
});
Route::get('/contact', 'ContactController@showForm')->name('contact.form');
Route::post('/contact', 'ContactController@submitForm')->name('contact.submit');
