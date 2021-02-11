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

Auth::routes();

Route::get('/', 'PagesController@home');
Route::get('catalog/{category}', 'Catalog\CategoriesController')->where('category', '.+');
Route::view('basket', 'basket');
Route::view('/category', 'category');
Route::resource('posts', 'PostsController')
    ->only('index', 'show');
Route::get('faq/{faq?}', 'FaqController')
    ->where('faq', '.+');
Route::view('/address', 'account.address');
Route::view('favourites', 'favourites');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/account', 'account.account');
Route::view('/orders', 'account.orders');
Route::view('/bonus', 'account.bonus');
Route::view('/shipping', 'checkout.shipping');
Route::view('/checkout', 'checkout.index');
Route::view('/successful', 'checkout.successful-order');
Route::view('/failed', 'checkout.failed-order');
Route::view('/basket', 'basket');
Route::view('product', 'product');
Route::group(['middleware' => 'auth'], function (){
});
