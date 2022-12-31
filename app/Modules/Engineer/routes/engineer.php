<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => config('engineerRoute.prefix.engineer'),
        'namespace' => config('engineerRoute.namespace.engineer'),
        'as' => config('engineerRoute.as.backend'),
        'middleware' => ['web']
    ],
    function () {

        Route::group([
            'prefix' => 'proposal',
            'as' => 'proposal.'
        ], function () {
            Route::get('all', 'EngineerProposalController@index')->name('index');
        });
    }
);
