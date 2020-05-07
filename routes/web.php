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

Route::get('/padel', function(){
    return view('pistas');
});

Route::get('/torneo', function(){
    return view('torneos');
});

Route::get('/crearTorneo', function(){
    return view('crearTorneo');
});

Route::get('/newArticle', function(){
    return view('newArticle');
});

Route::post('/prueba','ArticleController@store');
Route::get('/otraruta','ArticleController@index');


Route::get('/usuarios','UserController@index');
Route::get('/articulos','ArticleController@index');

Route::get('/createTournament','TournamentController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

