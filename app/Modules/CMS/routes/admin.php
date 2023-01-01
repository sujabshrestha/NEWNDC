<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.backend'),
    'namespace' => config('cmsroute.namespace.backend'),
    'as' => config('cmsroute.as.backend'),
    'middleware' => ['web']

], function () {

   


});
