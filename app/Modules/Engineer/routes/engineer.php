<?php

use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => config('engineerRoute.prefix.baengineerckend'),
        'namespace' => config('engineerRoute.namespace.engineer'),
        'as' => config('engineerRoute.as.engineer'),
        'middleware' => ['web']
    ],
    function () {

        Route::group([
            'prefix' => 'proposal',
            'as' => 'proposal.'
        ], function () {
            Route::get('all','EngineerProposalController@index')->name('index');
        });
    }
    

   
);
