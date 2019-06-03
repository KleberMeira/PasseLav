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

Route::get('/', ['uses' => 'Controller@home']);
Route::get('/promocoes', ['uses' => 'Controller@promocoes']);
Route::get('/credito', 'ControllerCreditos@lista');
Route::get('/servicos', ['uses' => 'Controller@servicos']);
Route::get('/contato', ['uses' => 'Controller@contato']);
Route::get('/sobre', ['uses' => 'Controller@sobre']);




