<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => config('receptionistRoute.prefix.backend'),
        'namespace' => config('receptionistRoute.namespace.backend'),
        'as' => config('receptionistRoute.as.backend'),
        'middleware' => ['web',]
    ],
    function () {


        Route::group([
            'prefix' => 'proposal',
            'as' => 'proposal.'
        ], function () {
            Route::get('/', 'AdminProposalController@index')->name('index');

            Route::get('get-proposal-data', 'AdminProposalController@getProposalData')->name('getProposalData');

            Route::get('/create', 'AdminProposalController@create')->name('create');

            Route::post('/submit', 'AdminProposalController@store')->name('submit');

            Route::get('/edit/{id}', 'AdminProposalController@edit')->name('edit');

            Route::post('/update/{id}', 'AdminProposalController@update')->name('update');

            Route::get('/delete/{id}', 'AdminProposalController@delete')->name('delete');
        });
    }
);
