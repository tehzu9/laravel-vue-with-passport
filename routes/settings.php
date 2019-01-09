<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Protected API Routes ~ Middleware => auth:api
|--------------------------------------------------------------------------
|
|   Settings Routes
|
 */


Route::get('/settings', function () {
    return "Settings Screen";
});

