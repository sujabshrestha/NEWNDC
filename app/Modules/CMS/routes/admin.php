<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.backend'),
    'namespace' => config('cmsroute.namespace.backend'),
    'as' => config('cmsroute.as.backend'),
    'middleware' => ['web']

], function () {

    Route::get('design','ProposalController@design')->name('design');

    Route::group([
        'prefix' => 'branch',
        'as' => 'branch.'
    ], function(){
        Route::get('all','BranchController@index')->name('index');

        Route::post('store', 'BranchController@store')->name('store');

        Route::get('edit/{id}', 'BranchController@edit')->name('edit');

        Route::post('update/{id}', 'BranchController@update')->name('update');
    });


    Route::group([
        'prefix' => 'proposal',
        'as' => 'proposal.'
    ], function(){
        Route::get('all','ProposalController@index')->name('index');

        Route::get('create', 'ProposalController@create')->name('create');

        Route::post('store', 'ProposalController@store')->name('store');

        Route::get('edit/{id}', 'ProposalController@edit')->name('edit');

        Route::post('update/{id}', 'ProposalController@update')->name('update');
    });


});
