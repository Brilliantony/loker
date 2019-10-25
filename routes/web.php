<?php
Route::get('/', 'HomeController@index')->name('index');
Route::get('login','LoginController@index' );

#company
Route::get('form/company/register','Backend\CompanyController@formRegis');
Route::post('company/register', 'Backend\CompanyController@register')->name('company.register');
Route::get('form/company/uploadFile/{company_id}','Backend\CompanyController@uploadFile');

#user
Route::get('form/verify/pass/{token}', 'Backend\UserController@formPass');
Route::post('verify/pass', 'Backend\UserController@createPW')->name('verify.password');

