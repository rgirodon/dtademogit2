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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aurevoir', function () {
    return view('aurevoir');
});

Route::get('/bslama', function () {
    return view('bslama');
});

Route::get('/adios', function () {
    return view('adios');
});

    Route::get('/la_revedere', function () {
        return view('la_revedere');
    });
