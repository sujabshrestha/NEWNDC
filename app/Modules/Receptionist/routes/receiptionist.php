<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('receptionistRoute.prefix.receptionist'),
    'namespace' => config('receptionistRoute.namespace.receptionist'),
    'as' => config('receptionistRoute.as.receptionist'),
    'middleware' => ['web','receptionistMiddleware']
],
function () {
    Route::get('dashboard','ReceptionistController@dashboard')->name('dashboard');


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
        'prefix' => 'site-visit',
        'as' => 'siteVisit.'
    ], function(){
        Route::get('all','ReceptionistSiteVisitController@index')->name('index');

        Route::get('create', 'ReceptionistSiteVisitController@create')->name('create');

        Route::post('store', 'ReceptionistSiteVisitController@store')->name('store');

        Route::get('edit/{id}', 'ReceptionistSiteVisitController@edit')->name('edit');

        Route::post('update/{id}', 'ReceptionistSiteVisitController@update')->name('update');

        Route::get('delete/{id}', 'ReceptionistSiteVisitController@destroy')->name('delete');
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

        Route::get('/lalpurja-delete/{id}','ReceptionistValuationController@lalpurjaDelete')->name('lalpurjaDelete');


        Route::get('/landbased-submit/{id}','ReceptionistValuationController@landBasedSubmit')->name('landBasedSubmit');
        Route::get('/landbased-delete/{id}','ReceptionistValuationController@landBasedDelete')->name('landBasedDelete');



        Route::get('/gov-boundaries-submit/{id}','ReceptionistValuationController@govBoundarySubmit')->name('govBoundarySubmit');
        Route::get('/gov-boundaries-delete/{id}','ReceptionistValuationController@govBoundaryDelete')->name('govBoundaryDelete');


        Route::get('/sitevisit-boundaries-submit/{id}','ReceptionistValuationController@sitevisitBoundarySubmit')->name('siteVisitBoundarySubmit');
        Route::get('/sitevisit-boundaries-delete/{id}','ReceptionistValuationController@siteVisitBoundaryDelete')->name('siteVisitBoundaryDelete');

        Route::post('/valuation-final-submit/{id}','ReceptionistValuationController@valuationFinalSubmit')->name('valuationFinalSubmit');

        Route::get('/buildign-valuation-submit/{id}','ReceptionistValuationController@buildingValautionSubmit')->name('buildingValautionSubmit');
        Route::get('/buildign-valuation-delete/{id}','ReceptionistValuationController@buildingValautionDelete')->name('buildingValautionDelete');

        Route::get('/pre-valuation-report/{site_visit_id}','ReceptionistValuationController@prevaluationReport')->name('prevaluationReport');

        Route::get('/final-valuation-report/{site_visit_id}','ReceptionistValuationController@finalvaluationReport')->name('finalvaluationReport');
        //document delete
        Route::get('/delete-upload-document/{id}','ReceptionistValuationController@docDelete')->name('docDelete');
        Route::get('/delete-upload-legaldocument/{id}','ReceptionistValuationController@legaldocDelete')->name('legaldocDelete');
        Route::get('/delete-upload-scandocument/{id}','ReceptionistValuationController@internalCADdelete')->name('internalCADDelete');
        Route::get('/delete-upload-legalscandocSubmit/{id}','ReceptionistValuationController@scandocDelete')->name('legalscandocDelete');


        //document images
        Route::get('/document-image/{id}','ReceptionistValuationController@docImages')->name('docImages');
        Route::get('/legaldocument-image/{id}','ReceptionistValuationController@legaldocImages')->name('legaldocImages');
        Route::get('/cad-image/{id}','ReceptionistValuationController@CADImages')->name('CADImages');
        Route::get('/internalcad-image/{id}','ReceptionistValuationController@internalCADImages')->name('internalCADImages');


    });




});
