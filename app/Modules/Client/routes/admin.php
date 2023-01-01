<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('clientRoute.prefix.backend'),
    'namespace' => config('clientRoute.namespace.backend'),
    'as' => config('clientRoute.as.backend'),
    'middleware' => ['web','adminMiddleware']
],
function () {
    

    // Route::group(['middleware' =>'role:admin' ],function(){

        // Route::get('/profile','ClientController@userProfile')->name('userProfile');

        // Route::post('/profile/update','ClientController@userProfileUpdate')->name('userProfileUpdate');    

        // Route::post('/password/update','ClientController@userPasswordUpdate')->name('userPasswordUpdate');    


        Route::get('/','ClientController@index')->name('index');

        Route::get('/create','ClientController@create')->name('create');


        Route::post('/store', 'ClientController@store')->name('store');

        Route::post('/update/{id}', 'ClientController@update')->name('update');

        Route::get('/destroy/{id}', 'ClientController@destroy')->name('destroy');

        Route::get('/edit/{id}', 'ClientController@edit')->name('edit');

        Route::get('/show/{id}', 'ClientController@show')->name('show');

        Route::get('/get-user-data', 'ClientController@getClientData')->name('getClientData');

        Route::get('/trashed', 'ClientController@trashedIndex')->name('trashedIndex');

        Route::get('/{id}/trashedDelete', 'ClientController@trashedDestroy')->name('trashedDestroy');

        Route::get('/{id}/trashedRecover', 'ClientController@trashedRecover')->name('trashedRecover');

 
        Route::post('/changeClientStatus/{id}', 'ClientController@changeClientStatus')->name('changeClientStatus');


});
