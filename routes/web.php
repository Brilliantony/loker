<?php
Route::get('login','LoginController@index' );
Route::post('validate-login','LoginController@validateLogin');
Route::get('logout','LoginController@logout' )->middleware('revalidate');

#company
Route::get('/company', 'Backend\CompanyController@index')->middleware('verify-login');
Route::get('/company/profil', 'Backend\CompanyController@profil')->middleware('verify-login');
Route::get('/company/profil/change-password', 'Backend\CompanyController@profilChangePassword')->middleware('verify-login');
Route::get('form/company/register','Backend\CompanyController@formRegis');
Route::get('form/company/uploadFile','Backend\CompanyController@formUpload')->name('formUploadFile');
Route::post('company/register', 'Backend\CompanyController@register')->name('company.register');
Route::post('company/uploadFile','Backend\CompanyController@updateUpload')->name('upload');
Route::post('company/posting','Backend\CompanyController@posting')->name('posting');
Route::get('search-provinsi','Backend\CompanyController@searchProvinsi');
Route::get('search-kota','Backend\CompanyController@searchKota');

#Applicant
Route::get('form/applicant/create','Backend\applicantController@formCreate');
Route::post('applicant/create', 'Backend\ApplicantController@create')->name('applicant.register');
Route::get('add-provinsi-applicant','Backend\ApplicantController@addProvinsi');
Route::get('add-kota-applicant','Backend\ApplicantController@addKota');
Route::get('applicant/get-all','Backend\ApplicantController@getAll');

#user
Route::get('form/verify/pass/{token}', 'Backend\UserController@formPass');
Route::post('verify/pass', 'Backend\UserController@createPW')->name('verify.password');

Route::post('upload-file','Backend\UploadController@create')->name('upload-file');