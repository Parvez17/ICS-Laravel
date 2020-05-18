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


///Product Catagories
});
Route::get('/budgetbusinesscards', function () {
    return view('navLink.productCatagories.budgetbusinesscards');
});
Route::get('/premiumstandardbc', function () {
    return view('navLink.shop');
});
Route::get('/plasticbusinesscards', function () {
    return view('navLink.shop');
});
Route::get('/recycledpaperbusinesscards', function () {
    return view('navLink.shop');
});
Route::get('/stationarypackeges', function () {
    return view('navLink.shop');
});
Route::get('/letterhead', function () {
    return view('navLink.shop');
});
Route::get('/envelope', function () {
    return view('navLink.shop');
});
Route::get('/moneyreciept', function () {
    return view('navLink.shop');
});
Route::get('/chalan-voucher', function () {
    return view('navLink.shop');
});
Route::get('/slip-pad', function () {
    return view('navLink.shop');
});
Route::get('/a4notebooks', function () {
    return view('navLink.shop');
});
Route::get('/a5notebooks', function () {
    return view('navLink.shop');
});
Route::get('/mug', function () {
    return view('navLink.shop');
});
Route::get('/printedpen', function () {
    return view('navLink.shop');
});
Route::get('/paperfolders', function () {
    return view('navLink.shop');
});
Route::get('/hangtag', function () {
    return view('navLink.shop');
});
Route::get('/printedpoloshirt', function () {
    return view('navLink.shop');
});
Route::get('/printedroundnecktshirt', function () {
    return view('navLink.shop');
});
Route::get('/tissuebox', function () {
    return view('navLink.shop');
});
Route::get('/resturentitems', function () {
    return view('navLink.shop');
});
Route::get('/papershoppingbag', function () {
    return view('navLink.shop');
});
Route::get('/pizzabox', function () {
    return view('navLink.shop');
});
Route::get('/plasticshoppingbag', function () {
    return view('navLink.shop');
});
Route::get('/plasticmailer', function () {
    return view('navLink.shop');
});
Route::get('/shoebox', function () {
    return view('navLink.shop');
});
Route::get('/burgerbox', function () {
    return view('navLink.shop');
});
Route::get('/parcelbox', function () {
    return view('navLink.shop');
});
Route::get('/papersticker', function () {
    return view('navLink.shop');
});
Route::get('/xbanner', function () {
    return view('navLink.shop');
});Route::get('/brochure', function () {
    return view('navLink.shop');
});
Route::get('/a4leaflet', function () {
    return view('navLink.shop');
});