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

Route::get('/filmes/{id}', 'FilmeController@procurarFilmeId');
Route::get('/filmes/procurar/{nome}', 'FilmeController@procurarFilmeNome');
Route::get('/filmes', 'FilmeController@listar');
Route::get('/adicionar-filme', 'FilmeController@adicionarFilme');
Route::post('/adicionar-filme', 'FilmeController@adicionarFilmePost');
Route::get('/tabela', 'FilmeController@exibirTabela');
Route::get('/tabela-filme/{id}', 'FilmeController@procurarFilmes');
