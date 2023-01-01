<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => config('engineerRoute.prefix.engineer'),
        'namespace' => config('engineerRoute.namespace.engineer'),
        'as' => config('engineerRoute.as.engineer'),
        'middleware' => ['web']
    ],
    function () {

        Route::group([
            'prefix' => 'proposal',
            'as' => 'proposal.'
        ], function () {
            Route::get('all', 'EngineerProposalController@index');
        });


        Route::group([
            'prefix' => 'sitevisit',
            'as' => 'sitevisit.'
        ], function () {
            Route::get('/','SiteVisitController@index')->name('index');

            Route::get('/create/{proposalid}/{id?}','SiteVisitController@create')->name('create');

            Route::post('/submit/{id?}','SiteVisitController@store')->name('submit');

            Route::get('/edit/{id}','SiteVisitController@edit')->name('edit');

            Route::post('/update/{id}','SiteVisitController@update')->name('update');

            Route::get('/delete/{id}','SiteVisitController@delete')->name('delete');
        });


    }
);
