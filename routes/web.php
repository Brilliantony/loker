<?php
Route::get('/company', 'Backend\CompanyController@index')->middleware('verify-login');;
Route::get('login','LoginController@index' );
Route::post('validate-login','LoginController@validateLogin');
Route::get('logout','LoginController@logout' )->middleware('revalidate');

#company
Route::get('form/company/register','Backend\CompanyController@formRegis');
Route::get('form/company/uploadFile','Backend\CompanyController@formUpload')->name('formUploadFile');
Route::post('company/register', 'Backend\CompanyController@register')->name('company.register');
Route::post('company/uploadFile','Backend\CompanyController@updateUpload')->name('upload');

#Applicant
Route::get('form/applicant/create','Backend\applicantController@formCreate');
Route::post('applicant/create', 'Backend\ApplicantController@create')->name('applicant.register');

#user
Route::get('form/verify/pass/{token}', 'Backend\UserController@formPass');
Route::post('verify/pass', 'Backend\UserController@createPW')->name('verify.password');

Route::post('upload-file','Backend\UploadController@create')->name('upload-file');