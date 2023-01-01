<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('authroute.prefix.backend'),
    'namespace' => config('authroute.namespace.backend'),
    'as' => config('authroute.as.backend'),
    'middleware' => ['web']

], function () {

    Route::get('/login', 'AuthController@login')->name('login');

    Route::post('login-submit', 'AuthController@loginSubmit')->name('loginSubmit');



    // Route::get('/register','AuthController@register')->name('register');

    // Route::post('/register-submit','AuthController@registerSubmit')->name('registersubmit');

    Route::get('/verify/{id}', 'AuthController@verify')->name('verify');

    // Route::get('/password-reset','AuthController@passwordReset')->name('passwordReset');

    // Route::post('/forgot-password','AuthController@forgetPassword')->name('forgetPassword');

    // Route::get('/reset-password/{token}','AuthController@showResetPasswordForm')->name('reset.password.show');

    // Route::post('/reset-password-form','AuthController@resetPasswordFormSubmit')->name('resetPasswordFormSubmit');





    Route::get('forget-password', 'AuthController@forgetPassword')->name('forgetPassword');

    Route::post('forgetPassword-submit', 'AuthController@forgetPasswordSubmit')->name('forgetPasswordSubmit');

    Route::get('user/resetpassword/{email}/{token}', 'AuthController@resetPassword')->name('resetPassword');

    Route::post('user/recoverpassword/{email}', 'AuthController@recoverPassword')->name('recoverPassword');

    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'adminMiddleware'
    ], function () {
        Route::get('dashboard', 'AuthController@dashboard')->name('dashboard');



        Route::post('/change-password-submit', 'AuthController@changeUserPasswordSubmit')->name('changePasswordSubmit');

        Route::get('/profile', 'AuthController@userProfile')->name('userProfile');

        Route::post('/profile/update/submit', 'AuthController@userProfileUpdate')->name('userProfileUpdate');
    });

    Route::group([
        'middleware' => 'engineerMiddleware'
    ], function () {
        Route::get('site-engineer/dashboard', 'AuthController@engineerDashboard')->name('engineerDashboard');

        Route::get('site-engineer/getSiteData','AuthController@engineerSiteData')->name('engineerSiteData');

    });

    Route::group([
        'middleware' => 'editorMiddleware'
    ], function () {
        Route::get('reception/dashboard', 'AuthController@receptionDashboard')->name('receptionDashboard');

        Route::get('reception/getProposalData','AuthController@receptionProposalData')->name('getProposalData');
    });
});
