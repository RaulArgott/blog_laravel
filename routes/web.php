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

Route::get('/', 'PagesController@index');
Route::get('fotos/{id?}', function($id = 'nombre'){
    return 'Galeria '.$id;
})->where('id', '[0-9]+');
Route::get('notas', 'PagesController@notas');
Route::post('notas/crear', 'PagesController@crear')->name('notas.crear');

