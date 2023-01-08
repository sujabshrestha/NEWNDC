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

        // Route::group([
        //     'prefix' => 'proposal',
        //     'as' => 'proposal.'
        // ], function () {
            Route::get('all', 'EngineerProposalController@index')->name('proposal.index');
        // });


            Route::group([
                'prefix' => 'client',
                'as' => 'client.'
            ],function(){
                Route::post('/update/{id}', 'ClientController@update')->name('update');

                Route::get('/destroy/{id}', 'ClientController@destroy')->name('destroy');

                Route::get('/edit/{id}', 'ClientController@edit')->name('edit');

                Route::get('/show/{id}', 'ClientController@show')->name('show');
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
