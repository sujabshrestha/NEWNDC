<?php

use Illuminate\Support\Facades\Route;

Route::group(
[
    'prefix' => config('engineerRoute.prefix.receptionist'),
    'namespace' => config('engineerRoute.namespace.receptionist'),
    'as' => config('engineerRoute.as.receptionist'),
    'middleware' => ['web']
],
function () {






});
