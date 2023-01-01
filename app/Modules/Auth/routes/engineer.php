<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('authroute.prefix.engineer'),
    'namespace' => config('authroute.namespace.engineer'),
    'as' => config('authroute.as.engineer'),
    'middleware' => ['web']

], function () {



    Route::group([
        // 'middleware' => 'engineerMiddleware'
    ], function () {
        Route::get('dashboard', 'AuthController@engineerDashboard')->name('engineerDashboard');

        // Route::get('site-engineer/getSiteData','AuthController@engineerSiteData')->name('engineerSiteData');

    });

});
