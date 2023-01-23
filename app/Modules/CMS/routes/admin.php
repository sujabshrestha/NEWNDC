<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.backend'),
    'namespace' => config('cmsroute.namespace.backend'),
    'as' => config('cmsroute.as.backend'),
    'middleware' => ['web']

], function () {

    Route::get('/valuation-design','BranchController@valuationForm')->name('valuationForm');

    Route::get('/building-valuation-design','BranchController@buildingValuationForm')->name('buildingValuationForm  ');

    Route::get('/nic-report', function(){
        return view('CMS::backend.design.preValuationReportForNIC');
    });

    Route::get('/sbi-report',function(){
        return view('CMS::backend.design.preValuationReportForSBI');
    });

    Route::get('/prabhu-report',function(){
        return view('CMS::backend.design.preValuationReportForPrabhu');
    });

    Route::get('/all-report',function(){
        return view('CMS::backend.design.preValuationReportForAll');
    });


});
