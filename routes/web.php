<?php
Route::get('/', 'HomeController@index')->name('index');
Route::get('login','LoginController@index' );
Route::post('validate-login','LoginController@validateLogin');

#company
Route::get('form/company/register','Backend\CompanyController@formRegis');
Route::get('form/company/uploadFile','Backend\CompanyController@formUpload')->name('formUploadFile');
Route::post('company/register', 'Backend\CompanyController@register')->name('company.register');
Route::post('company/uploadFile','Backend\CompanyController@updateUpload');

#user
Route::get('form/verify/pass/{token}', 'Backend\UserController@formPass');
Route::post('verify/pass', 'Backend\UserController@createPW')->name('verify.password');

