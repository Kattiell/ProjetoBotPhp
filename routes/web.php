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
    return view('home');
});

Route::get('/album', function () {
    return view('album');
});

Route::get('/biblioteca', function () {
    return view('biblioteca');
});

Route::get('/itens', function () {
    return view('itens');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/formulario', function () {
    return view('formulario');
});