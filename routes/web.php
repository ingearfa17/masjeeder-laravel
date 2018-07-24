<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::get('login', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth']], function() {
    Route::get('/', ['uses'=>'DashboardController@index', 'as'=>'dash']);
    Route::resource('categories', 'CategoriesController');
    Route::resource('kajian', 'KajianController');
    Route::resource('direktori', 'DirektoriController');
    Route::resource('quotes', 'QuotesController');
    Route::resource('event', 'EventController');
    Route::resource('users', 'UsersController')->middleware('Role:Superadmin|Admin');
    Route::get('profileedit/{id}', 'ProfileController@edit');
    Route::put('profileupdate/{id}', 'ProfileController@update');
});
