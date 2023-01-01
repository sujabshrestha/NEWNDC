<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('authroute.prefix.receptionist'),
    'namespace' => config('authroute.namespace.receptionist'),
    'as' => config('authroute.as.receptionist'),
    'middleware' => ['web']

], function () {

    // Route::group([
    //     'middleware' => 'receptionistMiddleware'
    // ], function () {
        Route::get('/dashboard', 'AuthController@receptionDashboard')->name('receptionDashboard');

        // Route::get('reception/getProposalData','AuthController@receptionProposalData')->name('getProposalData');


    // });
});
