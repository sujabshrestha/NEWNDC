<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('cmsroute.prefix.engineer'),
    'namespace' => config('cmsroute.namespace.engineer'),
    'as' => config('cmsroute.as.engineer'),
    'middleware' => ['web']

], function () {




});
