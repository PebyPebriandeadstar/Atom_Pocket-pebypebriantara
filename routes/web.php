<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/components-alerts', function () {
    return view('components-alerts');
});

Route::get('/dompetcreatenew', function () {
    return view('dompetcreatenew');
});

Route::get('/components-accordion', function () {
    return view('components-accordion');
});

Route::get('/kategoricreatenew', function () {
    return view('kategoricreatenew');
});

Route::get('/forms-elements', function () {
    return view('forms-elements');
});

Route::get('/forms-layouts', function () {
    return view('forms-layouts');
});

Route::get('/dompetmasukcreatenew', function () {
    return view('dompetmasukcreatenew');
});

Route::get('/dompetkeluarcreatenew', function () {
    return view('dompetkeluarcreatenew');
});

Route::get('/tables-data', function () {
    return view('tables-data');
});



