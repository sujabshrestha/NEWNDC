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
        'prefix' => 'bank',
        'as' => 'bank.'
    ], function(){
        Route::get('all','ReceptionistBankController@index')->name('index');

        Route::get('create', 'ReceptionistBankController@create')->name('create');

        Route::post('store', 'ReceptionistBankController@store')->name('store');

        Route::get('edit/{id}', 'ReceptionistBankController@edit')->name('edit');

        Route::get('delete/{id}', 'ReceptionistBankController@delete')->name('delete');

        Route::post('update/{id}', 'ReceptionistBankController@update')->name('update');
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

    Route::group([
        'prefix' => 'client',
        'as' => 'client.'
    ], function(){

        Route::get('/','ReceptionistClientController@index')->name('index');

        Route::get('/create','ReceptionistClientController@create')->name('create');

        Route::post('/store', 'ReceptionistClientController@store')->name('store');

        Route::post('/update/{id}', 'ReceptionistClientController@update')->name('update');

        Route::get('/destroy/{id}', 'ReceptionistClientController@destroy')->name('destroy');

        Route::get('/edit/{id}', 'ReceptionistClientController@edit')->name('edit');

        Route::get('/show/{id}', 'ReceptionistClientController@show')->name('show');

        Route::get('/get-user-data', 'ReceptionistClientController@getClientData')->name('getClientData');

        // Route::get('/trashed', 'ClientController@trashedIndex')->name('trashedIndex');

        // Route::get('/{id}/trashedDelete', 'ClientController@trashedDestroy')->name('trashedDestroy');

        // Route::get('/{id}/trashedRecover', 'ClientController@trashedRecover')->name('trashedRecover');

        Route::post('/changeClientStatus/{id}', 'ClientController@changeClientStatus')->name('changeClientStatus');
    });


    Route::group([
        'prefix' => 'valuation',
        'as' => 'valuation.'
    ], function(){
        Route::get('index', 'ReceptionistValuationController@valuations')->name('index');

        Route::get('/edit/{id}','ReceptionistValuationController@edit')->name('edit');

        Route::post('/update/{id}','ReceptionistValuationController@update')->name('update');

        Route::get('/delete/{id}','ReceptionistValuationController@delete')->name('delete');

        Route::get('/lalpurja-submit/{id}','ReceptionistValuationController@lalpurjaSubmit')->name('lalpurjaSubmit');

        Route::get('/landbased-submit/{id}','ReceptionistValuationController@landBasedSubmit')->name('landBasedSubmit');

        Route::get('/gov-boundaries-submit/{id}','ReceptionistValuationController@govBoundarySubmit')->name('govBoundarySubmit');

        Route::post('/valuation-final-submit/{id}','ReceptionistValuationController@valuationFinalSubmit')->name('valuationFinalSubmit');

        Route::get('/buildign-valuation-submit/{id}','ReceptionistValuationController@buildingValautionSubmit')->name('buildingValautionSubmit');

    });




});
