<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('engineerRoute.prefix.backend'),
    'namespace' => config('engineerRoute.namespace.backend'),
    'as' => config('engineerRoute.as.backend'),
    'middleware' => ['web',]
],
function () {

 


    Route::group([
        'prefix' => 'sitevisit',
        'as' => 'sitevisit.'
    ], function () {
        Route::get('/','AdminSiteVisitController@index')->name('index');

        Route::get('/create/{proposalid}/{id?}','AdminSiteVisitController@create')->name('create');

        Route::post('/submit/{id?}','AdminSiteVisitController@store')->name('submit');

        Route::get('/edit/{id}','AdminSiteVisitController@edit')->name('edit');

        Route::get('/show/{id}','AdminSiteVisitController@show')->name('show');


        Route::post('/update/{id}','AdminSiteVisitController@update')->name('update');

        Route::get('/delete/{id}','AdminSiteVisitController@delete')->name('delete');

        Route::post('/changeValuationStatus/{id}','AdminSiteVisitController@changeValuationStatus')->name('changeValuationStatus');

        Route::get('/changeVerificationStatus/{id}','AdminSiteVisitController@changeVerificationStatus')->name('changeVerificationStatus');


    });




});
