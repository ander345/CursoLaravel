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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');
//Route::view('permiso', 'permiso');

//use App\Models\Permiso;

//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');

use App\Http\Controllers\PermisoController;

Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
   
})->where('nombre', '[A-Za-z]+')->name('permiso');