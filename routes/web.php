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
Route::get('/welcome', function () {
    return view('welcome');
});
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
//registration
Route::post("/registration",'RegistrationController@Index');
///login
Route::post("/login",'LoginController@Index');

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
///Items
Route::get('/business-card', function () {
    return view('navLink.items.businesscard');
});
Route::get('/envelope', function () {
    return view('navLink.items.envelope');
});
Route::get('/money-receipt', function () {
    return view('navLink.items.money-receipt');
});
Route::get('/note-pad', function () {
    return view('navLink.items.note-pad');
});
Route::get('/register', function () {
    return view('navLink.items.register');
});
Route::get('/memo', function () {
    return view('navLink.items.memo');
});
Route::get('/magazine', function () {
    return view('navLink.items.magazine');
});
Route::get('/hangtag', function () {
    return view('navLink.items.hangtag');
});
Route::get('/pvc', function () {
    return view('navLink.items.pvc');
});
Route::get('/file-folder', function () {
    return view('navLink.items.file-folder');
});
Route::get('/calendar', function () {
    return view('navLink.items.calendar');
});
Route::get('/dairy', function () {
    return view('navLink.items.dairy');
});
Route::get('/voucher', function () {
    return view('navLink.items.voucher');
});
Route::get('/tissue-bag', function () {
    return view('navLink.items.tissue-bag');
});
Route::get('/tissue-box', function () {
    return view('navLink.items.tissue-box');
});


