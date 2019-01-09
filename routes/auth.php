<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Protected API Routes ~ Middleware => auth:api
|--------------------------------------------------------------------------
|
| Here is where you can register Protected API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "auth:api" middleware group. Enjoy building your Protected APIs!
|
 */

Route::post('/logout', 'AuthController@logout');

Route::get('/user', function (Request $request) {
    return $request->user();
});

// Route::patch('settings/profile', 'Settings\ProfileController@update');
// Route::patch('settings/password', 'Settings\PasswordController@update');

// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

