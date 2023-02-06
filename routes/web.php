<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/o-nama', 'App\Http\Controllers\PagesController@onama');
Route::get('/galerija', 'App\Http\Controllers\PagesController@galerija');
Route::get('/korisnik/{id}', 'App\Http\Controllers\PagesController@korisnik');
Route::get('/login', 'App\Http\Controllers\PagesController@login');
Route::get('/register', 'App\Http\Controllers\PagesController@register');
Route::get('/admin', 'App\Http\Controllers\PagesController@admin')->middleware('auth');
Route::get('/korpa', 'App\Http\Controllers\PagesController@korpa')->middleware('auth');
Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->middleware('auth');
Route::get('/admin/update', 'App\Http\Controllers\PagesController@update')->middleware('auth');
Route::get('/admin/delete', 'App\Http\Controllers\PagesController@delete')->middleware('auth');
Route::get('/admin/users', 'App\Http\Controllers\PagesController@users')->middleware('auth');
Route::get('/admin/porudzbine', 'App\Http\Controllers\PagesController@orders')->middleware('auth');

Route::resource('users', 'App\Http\Controllers\UsersController');

Route::resource('products', 'App\Http\Controllers\ProductsController');
Route::post('/', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store')->middleware('auth');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/destroy', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');

Route::resource('narudzbenice', 'App\Http\Controllers\NarudzbenicasController');

Route::get('/products/category/muski', 'App\Http\Controllers\PagesController@cat_muski');
Route::get('/products/category/zenski', 'App\Http\Controllers\PagesController@cat_zenski');
Route::get('/products/category/dodaci', 'App\Http\Controllers\PagesController@cat_dodaci');
Route::get('/products/category/ronilacki', 'App\Http\Controllers\PagesController@cat_ronilacki');
Route::get('/products/category/elegantni', 'App\Http\Controllers\PagesController@cat_elegantni');
Route::get('/products/category/sportski', 'App\Http\Controllers\PagesController@cat_sportski');
Route::get('/products/category/digitalni', 'App\Http\Controllers\PagesController@cat_digitalni');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
