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

Route::Resource('operacionesBasicas', 'OperacionesBasica');

Route::get('operacionesBasicas/{id}/destroy', [
  'uses'=>'OperacionesBasica@destroy',
  'as' => 'productos.destroy'
]);

Route::get('/operacionesBasicas/{id}/edit', function(){
    return view('editar');
});
  


Route::get('/men', function () {
    return view('men');
});

Route::get('/idrc', function () {
    return view('idrc');
});

Route::get('/top', function () {
    return view('top');
});
Route::get('/producto1', function () {
    return view('producto1');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
