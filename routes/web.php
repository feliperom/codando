<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('portfolio', function () {
    return view('pages.portfolio');
});

Route::get('servicos', function () {
    return view('pages.servicos');
});

Route::get('sobre', function () {
    return view('pages.sobre');
});

Route::get('contato', function () {
    return view('pages.contato');
});