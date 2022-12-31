<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('engineerRoute.prefix.backend'),
    'namespace' => config('engineerRoute.namespace.backend'),
    'as' => config('engineerRoute.as.backend'),
    'middleware' => ['web',]
],
function () {






});
