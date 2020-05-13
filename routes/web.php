<?php

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
    return view('home.index');
});

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/corporate', function () {
    return view('navLink.corporate');
});
Route::get('/shop', function () {
    return view('navLink.shop');
});
Route::get('/myaccount', function () {
    return view('navLink.myAccount');
});
Route::get('/checkout', function () {
    return view('navLink.checkOut');
});
Route::get('/cart', function () {
    return view('navLink.cart');
});
Route::get('/wishlist', function () {
    return view('navLink.wishList');
});
Route::get('/blog', function () {
    return view('navLink.blog');
});
Route::get('/aboutus', function () {
    return view('navLink.aboutUs');
});
Route::get('/contactus', function () {
    return view('navLink.ContactUs');
});
Route::get('/design', function () {
    return view('navLink.design');
});

