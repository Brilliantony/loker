<?php
Route::get('/', 'HomeController@index')->name('index');
Route::get('user-login','LoginController@index' );

#company
Route::get('company-form-regis','Backend\CompanyController@formRegis');
//Route::post('company-form-regis','Backend\CompanyController@formRegis');
Route::post('company-register', 'Backend\CompanyController@register')->name('company.register');

#user
Route::get('verify-pass-form', 'Backend\UserController@index');
Route::post('verify-pass', 'Backend\UserController@createPW');
