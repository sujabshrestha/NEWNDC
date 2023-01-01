<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('receptionistRoute.prefix.receptionist'),
    'namespace' => config('receptionistRoute.namespace.receptionist'),
    'as' => config('receptionistRoute.as.receptionist'),
    'middleware' => ['web']
],
function () {

    Route::group([
        'prefix' => 'branch',
        'as' => 'branch.'
    ], function(){
        Route::get('all','ReceptionistBranchController@index')->name('index');

        Route::post('store', 'ReceptionistBranchController@store')->name('store');

        Route::get('edit/{id}', 'ReceptionistBranchController@edit')->name('edit');

        Route::get('delete/{id}', 'ReceptionistBranchController@delete')->name('delete');

        Route::post('update/{id}', 'ReceptionistBranchController@update')->name('update');
    });


    Route::group([
        'prefix' => 'proposal',
        'as' => 'proposal.'
    ], function(){
        Route::get('all','ReceptionistProposalController@index')->name('index');

        Route::get('create', 'ReceptionistProposalController@create')->name('create');

        Route::post('store', 'ReceptionistProposalController@store')->name('store');

        Route::get('edit/{id}', 'ReceptionistProposalController@edit')->name('edit');

        Route::post('update/{id}', 'ReceptionistProposalController@update')->name('update');

        Route::get('delete/{id}', 'ReceptionistProposalController@destroy')->name('delete');
    });




});
