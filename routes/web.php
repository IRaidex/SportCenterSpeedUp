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
});

// por que lo llamas artículos, articulo y article si todo es del mismo controller¿?¿

Route::post('/articulo/create','ArticleController@store');

Route::get('/articulos/all','ArticleController@index');
Route::get('/articulo/{id}','ArticleController@show');

Route::post('/articulo/comentario/create','ComentController@store');


//Route::get('/createTournament','TournamentController@create');


Auth::routes();
Route::get('/usuarios','UserController@index');
Route::get('/home', 'HomeController@index')->name('home');

