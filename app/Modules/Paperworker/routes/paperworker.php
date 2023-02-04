<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('paperworkerRoute.prefix.paperworker'),
    'namespace' => config('paperworkerRoute.namespace.paperworker'),
    'as' => config('paperworkerRoute.as.paperworker'),
    'middleware' => ['web','paperworkerMiddleware']
],
function () {


    Route::get('dashboard','PaperworkerController@dashboard')->name('dashboard');
   
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

    Route::group([
        'prefix' => 'client',
        'as' => 'client.'
    ], function(){

        Route::get('/','PaperworkerClientController@index')->name('index');

        Route::get('/create','PaperworkerClientController@create')->name('create');

        Route::post('/store', 'PaperworkerClientController@store')->name('store');

        Route::post('/update/{id}', 'PaperworkerClientController@update')->name('update');

        Route::get('/destroy/{id}', 'PaperworkerClientController@destroy')->name('destroy');

        Route::get('/edit/{id}', 'PaperworkerClientController@edit')->name('edit');

        Route::get('/show/{id}', 'PaperworkerClientController@show')->name('show');

        Route::get('/get-user-data', 'PaperworkerClientController@getClientData')->name('getClientData');

        // Route::get('/trashed', 'ClientController@trashedIndex')->name('trashedIndex');

        // Route::get('/{id}/trashedDelete', 'ClientController@trashedDestroy')->name('trashedDestroy');

        // Route::get('/{id}/trashedRecover', 'ClientController@trashedRecover')->name('trashedRecover');

        Route::post('/changeClientStatus/{id}', 'ClientController@changeClientStatus')->name('changeClientStatus');
    });


    Route::group([
        'prefix' => 'valuation',
        'as' => 'valuation.'
    ], function(){
        Route::get('index', 'PaperworkerValuationController@valuations')->name('index');

        Route::get('/edit/{id}','PaperworkerValuationController@edit')->name('edit');

        Route::post('/update/{id}','PaperworkerValuationController@update')->name('update');

        Route::get('/delete/{id}','PaperworkerValuationController@delete')->name('delete');

        Route::get('/lalpurja-submit/{id}','PaperworkerValuationController@lalpurjaSubmit')->name('lalpurjaSubmit');

        Route::get('/lalpurja-delete/{id}','PaperworkerValuationController@lalpurjaDelete')->name('lalpurjaDelete');


        Route::get('/landbased-submit/{id}','PaperworkerValuationController@landBasedSubmit')->name('landBasedSubmit');
        Route::get('/landbased-delete/{id}','PaperworkerValuationController@landBasedDelete')->name('landBasedDelete');



        Route::get('/gov-boundaries-submit/{id}','PaperworkerValuationController@govBoundarySubmit')->name('govBoundarySubmit');
        Route::get('/gov-boundaries-delete/{id}','PaperworkerValuationController@govBoundaryDelete')->name('govBoundaryDelete');


        Route::get('/sitevisit-boundaries-submit/{id}','PaperworkerValuationController@sitevisitBoundarySubmit')->name('siteVisitBoundarySubmit');
        Route::get('/sitevisit-boundaries-delete/{id}','PaperworkerValuationController@siteVisitBoundaryDelete')->name('siteVisitBoundaryDelete');

        Route::post('/valuation-final-submit/{id}','PaperworkerValuationController@valuationFinalSubmit')->name('valuationFinalSubmit');

        Route::get('/buildign-valuation-submit/{id}','PaperworkerValuationController@buildingValautionSubmit')->name('buildingValautionSubmit');
        Route::get('/buildign-valuation-delete/{id}','PaperworkerValuationController@buildingValautionDelete')->name('buildingValautionDelete');

        Route::get('/pre-valuation-report/{site_visit_id}','PaperworkerValuationController@prevaluationReport')->name('prevaluationReport');

        Route::get('/final-valuation-report/{site_visit_id}','PaperworkerValuationController@finalvaluationReport')->name('finalvaluationReport');
        //document delete
        Route::get('/delete-upload-document/{id}','PaperworkerValuationController@docDelete')->name('docDelete');
        Route::get('/delete-upload-legaldocument/{id}','PaperworkerValuationController@legaldocDelete')->name('legaldocDelete');
        Route::get('/delete-upload-scandocument/{id}','PaperworkerValuationController@internalCADdelete')->name('internalCADDelete');
        Route::get('/delete-upload-legalscandocSubmit/{id}','PaperworkerValuationController@scandocDelete')->name('legalscandocDelete');


    });




});
