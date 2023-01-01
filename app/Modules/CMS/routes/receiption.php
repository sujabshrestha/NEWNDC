<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.receiption'),
    'namespace' => config('cmsroute.namespace.receiption'),
    'as' => config('cmsroute.as.receiption'),
    'middleware' => ['web']

], function () {

   

});
