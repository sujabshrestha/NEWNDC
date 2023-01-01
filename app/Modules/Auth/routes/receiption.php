<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('authroute.prefix.receiption'),
    'namespace' => config('authroute.namespace.receiption'),
    'as' => config('authroute.as.receiption'),
    'middleware' => ['web']

], function () {

    // Route::group([
    //     'middleware' => 'editorMiddleware'
    // ], function () {
        Route::get('reception/dashboard', 'AuthController@receptionDashboard')->name('receptionDashboard');

        Route::get('reception/getProposalData','AuthController@receptionProposalData')->name('getProposalData');
    // });
});
