<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.receiption'),
    'namespace' => config('cmsroute.namespace.receiption'),
    'as' => config('cmsroute.as.receiption'),
    'middleware' => ['web']

], function () {

    Route::get('design','ProposalController@design')->name('design');

    Route::group([
        'prefix' => 'branch',
        'as' => 'branch.'
    ], function(){
        Route::get('all','ReceiptionBranchController@index')->name('index');

        Route::post('store', 'ReceiptionBranchController@store')->name('store');

        Route::get('edit/{id}', 'ReceiptionBranchController@edit')->name('edit');

        Route::post('update/{id}', 'ReceiptionBranchController@update')->name('update');
    });


    Route::group([
        'prefix' => 'proposal',
        'as' => 'proposal.'
    ], function(){
        Route::get('all','ReceiptionProposalController@index')->name('index');

        Route::get('create', 'ReceiptionProposalController@create')->name('create');

        Route::post('store', 'ReceiptionProposalController@store')->name('store');

        Route::get('edit/{id}', 'ReceiptionProposalController@edit')->name('edit');

        Route::post('update/{id}', 'ReceiptionProposalController@update')->name('update');
    });


});
