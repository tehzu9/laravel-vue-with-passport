<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */



//  This route should be loaded in the end of the file.
Route::get('{path}', function () {
    return view('index');
})->where('path', '(.*)');
