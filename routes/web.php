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
Route::get('/', ['uses' => 'controller@homepage']);
Route::get('/cadastro', ['uses' => 'Controller@cadastrar']);

Route::get(
    '/login',
    [
        'as'   => 'user.login', // alias para rota
        'uses' => 'Controller@fazerLogin'
    ]
);


