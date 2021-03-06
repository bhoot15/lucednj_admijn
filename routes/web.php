<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::resource('/signature-collection-page', 'SignatureCollectionPageController');
Route::resource('/njs-look-book', 'NjsLookBookPageController');
Route::resource('/home-njs-look-book', 'HomeNjsLookBookPageController');
Route::resource('/about-us', 'AboutUsController');
Route::resource('/work-with-us', 'WorkWithUsController');
Route::resource('/vlogs', 'VlogController');
Route::resource('/lofs', 'LightOfFashionController');
Route::resource('/home-insta-nj-misty', 'HomeInstaNjMistyController');
Route::resource('/home-insta-lucednj', 'HomeInstaLucednjController');
Route::resource('/less-is-more', 'LessIsMoreController');
Route::resource('/luxury-scarves', 'LuxuryScarveController');
Route::resource('/shop-my-look', 'ShopMyLookController');
Route::resource('/images', 'ImageController');
