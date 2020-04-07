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

Route::get('/','Productos@inicio');

Route::get('/formulario','Productos@store');

Route::get('/eliminar/{id?}','Productos@destroy');

Route::get('/editar/{id?}','Productos@edit');

Route::post('/actual/{id?}','Productos@act');

Route::post('/guardar','Productos@save');






