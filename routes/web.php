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
    return view('index');
});

Route::get('consultas', function () {
    return view('consultas.consultas');
});

Route::get('consultas/create', function () {
    return view('consultas.create');
});

Route::get('consultas/invitar', function () {
    return view('consultas.invitar');
});
