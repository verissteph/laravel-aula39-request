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
Route::get('/collection',function(){
    $actor=App\Actor::find(33);
    dd($actor->episodes->pluck('title'));
    // $actor=App\
});

Route::get('/collection', function () {
    $movie = App\Movie::find();
    dd($movie->actor->pluck('first_name'));
});
Route::get('/collection', function () {
    $genre = App\Genre::find();
    dd($genre->movie->pluck('title'));
});


Route::get('/filmes/{id}', 'FilmeController@procurarFilmeId');
Route::get('/filmes/procurar/{nome}', 'FilmeController@procurarFilmeNome');
Route::get('/filmes', 'FilmeController@listar');
Route::get('/adicionar-filme', 'FilmeController@adicionarFilme');
Route::post('/adicionar-filme', 'FilmeController@adicionarFilmePost');
Route::get('/tabela', 'FilmeController@exibirTabela');
Route::get('/tabela-filme/{id}', 'FilmeController@procurarFilmes');

Route::get('/adicionar-usuario', 'UserController@create');
Route::post('/adicionar-usuario', 'UserController@store');

Route::get('/usuarios', 'UserController@index')->middleware('auth');
//
Route::auth();

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
