<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('engineerHeadRoute.prefix.engineerhead'),
    'namespace' => config('engineerHeadRoute.namespace.engineerhead'),
    'as' => config('engineerHeadRoute.as.engineerhead'),
    'middleware' => ['web']
],
function () {


    Route::get('dashboard','EngineerheadController@dashboard')->name('dashboard');

    Route::get('assign-engineer/{id}','EngineerheadController@assignEngineer')->name('assignEngineer');


    Route::post('engineer-update/{id}','EngineerheadController@update')->name('EngineerUpdate');

    Route::group([
        'prefix' => 'proposal',
        'as' => 'proposal.'
    ], function(){
        Route::get('all','PaperworkerProposalController@index')->name('index');

        Route::get('create', 'PaperworkerProposalController@create')->name('create');

        Route::post('store', 'PaperworkerProposalController@store')->name('store');

        Route::get('edit/{id}', 'PaperworkerProposalController@edit')->name('edit');

        Route::post('update/{id}', 'PaperworkerProposalController@update')->name('update');

        Route::get('delete/{id}', 'PaperworkerProposalController@destroy')->name('delete');
    });






});
