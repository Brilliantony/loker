<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// })

// Route::prefix('user')->group(function(){
// 	Route::get('/', 'Api\UserController@users');
// 	Route::post('login', 'Api\UserController@login');
// 	Route::post('register', 'Api\UserController@register');
// 	Route::post('borrow-film', 'Api\UserController@borrows');
// 	Route::post('my-film', 'Api\UserController@myfilms');
// });

// Route::get('film', 'Api\FilmController@films');
// Route::prefix('admin')->group(function(){
// 	Route::get('/', 'Api\AdminController@admin');
// 	Route::post('login', 'Api\AdminController@login');
// 	Route::post('register', 'Api\AdminController@register');
// });
// Route::prefix('report_trending_produk')->group(function(){
// 	Route::get('/','Api\Report_Trending_Sell_Controller@trending_produk');
// });
// Route::prefix('report_merchandise_place')->group(function(){
// 	Route::get('/','Api\Report_Merchandise_Place_Controller@merchandise_place');
// });
// Route::prefix('report_exchange_merchandise')->group(function(){
// 	Route::get('/','Api\Report_Trending_Exchange_Controller@merchandise_exchange');
// });
// Route::prefix('report_sumpayment_produk')->group(function(){
// 	Route::get('/','Api\Report_SumPayment_Produk_Controller@sumpayment');
// });