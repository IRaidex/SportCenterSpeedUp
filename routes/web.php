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

Auth::routes();

Route::get('/', function(){
    return view('index');
});

Route::get('/pistas', function(){
    return view('pistas');
});

Route::get('/torneo', function(){
    return view('torneos');
});

Route::get('/crearTorneo', function(){
    return view('crearTorneo');
});

Route::get('/crearArticulo', function(){
    return view('newArticle');
})->middleware('ambos');


Route::get('/inscribete', function(){
    return view('inscribete');
});


Route::post('/articulo/create','ArticleController@store');
Route::get('/articulos/all','ArticleController@index');
Route::get('/articulos/ultimos','ArticleController@ultimos');
Route::get('/articulo/{id}','ArticleController@show');
Route::get('/articulo/edit/{id}','ArticleController@edit');
Route::get('/articulo/update/{id}','ArticleController@update');
Route::post('/articulo/comentario/create','ComentController@store');

Route::get('/usuarios','UserController@index')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil/user','UserController@show');
Route::post('/perfil/edit','UserController@update');
