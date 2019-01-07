<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'API\AuthController@logout');
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Route::patch('settings/profile', 'Settings\ProfileController@update');
    // Route::patch('settings/password', 'Settings\PasswordController@update');

    // Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    // Route::post('password/reset', 'Auth\ResetPasswordController@reset');

});
