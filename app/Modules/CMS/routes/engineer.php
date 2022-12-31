<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.engineer'),
    'namespace' => config('cmsroute.namespace.engineer'),
    'as' => config('cmsroute.as.engineer'),
    'middleware' => ['web']

], function () {

    Route::get('design','ProposalController@design')->name('design');

    Route::group([
        'prefix' => 'proposal',
        'as' => 'proposal.'
    ], function(){
        Route::get('all','EngineerProposalController@index')->name('index');

        Route::get('create', 'EngineerProposalController@create')->name('create');

        Route::post('store', 'EngineerProposalController@store')->name('store');

        Route::get('edit/{id}', 'EngineerProposalController@edit')->name('edit');

        Route::post('update/{id}', 'EngineerProposalController@update')->name('update');
    });


});
