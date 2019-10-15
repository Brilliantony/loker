<?php

// Route::get('/', 'Backend\BackendController@actionIndex')->middleware('verify-login');
// Route::get('login', 'Backend\LoginController@actionIndex');
// Route::get('logout', 'Backend\LoginController@actionLogout')->middleware('revalidate');
// Route::post('validate-login', 'Backend\LoginController@actionLogin');

// Route::resource('user', 'Backend\UserController')->middleware('verify-login');
// Route::resource('kategori', 'Backend\KategoriController')->middleware('verify-login');
// Route::resource('kategori_produk', 'Backend\KategoriProdukController')->middleware('verify-login');
// Route::resource('produk', 'Backend\ProdukController')->middleware('verify-login');
// Route::resource('hadiah', 'Backend\HadiahController')->middleware('verify-login');
// Route::resource('peminjaman', 'Backend\PeminjamanController')->middleware('verify-login');
// Route::resource('transaksi', 'Backend\TransaksiController')->middleware('verify-login');
// Route::resource('penukaran', 'Backend\PenukaranController')->middleware('verify-login');
// Route::resource('poin', 'Backend\PoinController')->middleware('verify-login');
// Route::resource('transaksi_item', 'Backend\Transaksi_Item_Controller')->middleware('verify-login');
// Route::resource('/report/Penukaran', 'Backend\Report_Penukaran_Controller')->middleware('verify-login');
// Route::resource('/report/Transaksi', 'Backend\Report_Transaksi_Controller')->middleware('verify-login');
// Route::resource('/report-trending-sell', 'Backend\Report_Trending_Sell_Controller')->middleware('verify-login');
// Route::resource('/report-trending-exchange', 'Backend\Report_Trending_Exchange_Controller')->middleware('verify-login');
// Route::resource('/report-produk-place', 'Backend\Report_Produk_Place_Controller')->middleware('verify-login');
// Route::resource('/report-merchandise-place', 'Backend\Report_Merchandise_Place_Controller')->middleware('verify-login');
// Route::resource('/report-sumpayment-produk', 'Backend\Report_SumPayment_Produk_Controller')->middleware('verify-login');
// //Route::get('my-chart', 'Backend\Report_Stok_Produk_Controller@index');

// Route::group(['prefix' => 'form', 'middleware' => 'verify-login'], function(){
// 	Route::get('user', function () { return view('user.form'); });
// 	Route::get('kategori', function () {return view('kategori.form'); 	});
// 	Route::get('kategori_produk', function () {return view('kategori_produk.form'); 	});
// 	Route::get('produk', function () { 
// 		$kategori_produk = App\Models\Kategori_Produk::all();
// 		$params = [
// 			'kategori_produk' => $kategori_produk,
// 		];
// 		return view('produk.form',$params); 
// 	});
// 	Route::get('hadiah', function () {
// 		$kategori = App\Models\Kategori::all();
// 		$params = [
// 			'kategori' => $kategori,
// 		];
// 		return view('hadiah.form', $params);
// 	});
	
// 	Route::get('poin', function () {return view('poin.form'); 	});
// 	Route::get('penukaran', function () { 
// 		$user 	= App\Models\User::all();
// 		$hadiah = App\Models\Hadiah::all();
// 		$params = [
// 			'user'	=> $user,
// 			'hadiah'=>$hadiah,
// 		];
// 		return view('penukaran.form', $params); 
// 	});
	
// 	Route::get('get-poin','Backend\PenukaranController@getSelected');
// 	Route::get('get-poin-user','Backend\PenukaranController@getSelectedUser');
// 	Route::get('transaksi_item', function () {

// 		$transaksi = App\Models\Transaksi::all();
// 		$produk = App\Models\Produk::all();
//         $user = App\Models\User::all();
// 		$params = [
// 			'transaksi'	=> $transaksi,
// 			'produk'	=> $produk,
//             'user'		=> $user,
// 		];
// 		return view('transaksi_item.form', $params); 
// 	});
	
// 	Route::get('search-name-transaksi','Backend\Transaksi_Item_Controller@searchName');
// 	Route::get('search-produk-transaksi','Backend\Transaksi_Item_Controller@searchProduk');
// 	Route::get('search-name-penukaran','Backend\PenukaranController@searchName');
// 	Route::get('report-penukaran',['as'=>'report-penukaran','uses'=>'Backend\Report_Penukaran_Controller@htmltoPDF']);
// 	Route::get('report-transaksi',['as'=>'report-transaksi','uses'=>'Backend\Report_Transaksi_Controller@htmltoPDF']);
// 	Route::get('penukaran-excel',['as'=>'penukaran-excel','uses'=>'Backend\Report_Penukaran_Controller@htmltoExcel']);
// });

// /*Route Status*/
// Route::post('transaksi_item/save-checkbox-selected','Backend\Transaksi_Item_Controller@saveCheckboxSelected')->middleware('verify-login');
// Route::post('penukaran/save-checkbox-selected','Backend\PenukaranController@saveCheckboxSelected')->middleware('verify-login');

// /*Route Konfirmasi Submit*/
// Route::post('penukaran/save','Backend\PenukaranController@store')->middleware('verify-login');
// Route::post('poin/save','Backend\PoinController@store')->middleware('verify-login');
// Route::post('kategori/save','Backend\KategoriController@store')->middleware('verify-login');
// Route::post('kategori_produk/save','Backend\KategoriProdukController@store')->middleware('verify-login');
// Route::post('user/save','Backend\UserController@store')->middleware('verify-login');
// Route::post('produk/save','Backend\ProdukController@store')->middleware('verify-login');
// Route::post('hadiah/save','Backend\HadiahController@store')->middleware('verify-login');
// Route::post('transaksi_item/save','Backend\Transaksi_Item_Controller@store')->middleware('verify-login');

// /*Route Konfirmasi Delete*/
// Route::post('user/delete','Backend\UserController@destroy')->middleware('verify-login');
// Route::post('kategori/delete','Backend\KategoriController@destroy')->middleware('verify-login');
// Route::post('kategori_produk/delete','Backend\KategoriProdukController@destroy')->middleware('verify-login');
// Route::post('produk/delete','Backend\ProdukController@destroy')->middleware('verify-login');
// Route::post('poin/delete','Backend\PoinController@destroy')->middleware('verify-login');
// Route::post('hadiah/delete','Backend\HadiahController@destroy')->middleware('verify-login');
// Route::post('penukaran/delete','Backend\PenukaranController@destroy')->middleware('verify-login');
// Route::post('transaksi_item/delete','Backend\Transaksi_Item_Controller@destroy')->middleware('verify-login');
	
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('user-login','Auth\LoginController@showLoginForm' );
Route::post('user-login', ['as'=>'user-login', 'uses'=>'Auth\LoginController@login']);
Route::get('user-register', 'Auth\RegisterController@showRegisterForm');
Route::post('user-register', ['as'=>'user-register', 'uses'=>'Auth\RegisterController@register']);
