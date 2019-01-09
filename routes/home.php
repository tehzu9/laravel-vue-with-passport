<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Protected API Routes ~ Middleware => auth:api
|--------------------------------------------------------------------------
|
| Home Routes
|
 */


// Route::controller('/home', 'HomeController@index');

Route::get('/home/controller', function () {
    return "Home Screen";
});

