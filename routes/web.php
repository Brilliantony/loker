<?php
Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('user-login','LoginController@index' );
Route::get('company-register', 'CompanyController@index');

#confirm submit
Route::post('save', 'CompanyController@create');
// Route::group(['prefix' => 'company'], function () {
//     Route::get('/', 'Backend\CompanyController@index');
//     Route::post('/add', 'Backend\CompanyController@add');
//     Route::post('/save', 'Backend\CompanyController@save');
//     Route::post('/delete', 'Backend\CompanyController@delete');
// });

Route::get('company', 'Backend\CompanyController@index');
Route::post('company/save', 'Backend\CompanyController@save');