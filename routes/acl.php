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

// Route::get('/manage_roles', 'AclController');

Route::get('/acl/members', function () {
    return "Home Screen";
});

