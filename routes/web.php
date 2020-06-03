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


Route::post('/articulo/create','ArticleController@store')->middleware('ambos');
Route::get('/articulos/admin','ArticleController@todos')->middleware('admin');
Route::get('/articulo/deleteAdmin/{id}','ArticleController@destroyAdmin')->middleware('admin');
Route::get('/articulo/delete/{id}','ArticleController@destroy')->middleware('ambos');
Route::get('/articulos/all','ArticleController@index');
Route::get('/articulos/ultimos','ArticleController@ultimos');
Route::get('/articulo/{id}','ArticleController@show');
Route::get('/articulo/edit/{id}','ArticleController@edit')->middleware('ambos');
Route::post('/articulo/update/{id}','ArticleController@update')->middleware('ambos');
Route::post('/articulo/comentario/create','ComentController@store')->middleware('login');

Route::get('/usuarios/admin','UserController@index')->middleware('admin');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfil/user','UserController@show')->middleware('login');
Route::get('/perfil/edit/{id}','UserController@edit')->middleware('login');
Route::get('/perfil/delete/{id}','UserController@destroy')->middleware('admin');
Route::post('/perfil/update/{id}','UserController@update')->middleware('login');

Route::get('/packs/admin','PackController@packs')->middleware('admin');
Route::get('/pack/all','PackController@index');
Route::get('/crearPack','ServiceController@index')->middleware('admin');
Route::post('/pack/create','PackController@store');

Route::get('/inscribete','PackController@selects')->middleware('login');
Route::get('/card/{id}','CardController@show')->middleware('login');
Route::post('/card/save','CardController@store')->middleware('login');
Route::post('/contract','ContractController@store')->middleware('login');



