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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('cadastros', 'CadastroController')->middleware('auth');
Route::resource('enderecos', 'EnderecoController')->middleware('auth');
Route::resource('filmes', 'FilmeFavoritoController')->middleware('auth');

//relacionamentos
Route::get('/cadastroenderecos/{id}', 'CadastroEnderecoController@listaEnderecos')->name('cadastroAdicionaEndereco');
Route::post('/cadastroenderecos/{id}/{item_id}', 'CadastroEnderecoController@adiciona')->where('id', '[0-9]+')->where('id', '[0-9]+')->where('item_id', '[0-9]+');
Route::post('/removeenderecos/{id}/{item_id}', 'CadastroEnderecoController@remove')->where('id', '[0-9]+')->where('item_id', '[0-9]+');
Route::get('/cadastrofilmes/{id}', 'CadastroFilmeFavoritoController@listaFilmes')->name('cadastroAdicionaFilme')->where('id', '[0-9]+');
Route::post('/cadastrofilmes/{id}/{item_id}', 'CadastroFilmeFavoritoController@adiciona')->where('id', '[0-9]+')->where('item_id', '[0-9]+');
Route::post('/removefilmes/{id}/{item_id}', 'CadastroFilmeFavoritoController@remove')->where('id', '[0-9]+')->where('item_id', '[0-9]+');

Route::get('/enderecocadastros/{id}', 'CadastroEnderecoController@listaCadastros')->name('enderecoAdicionaCadastro');
Route::get('/enderecofilmes/{id}', 'CadastroFilmeFavoritoController@listaCadastros')->name('filmeAdicionaCadastro');

// GET/contacts, mapped to the index() method,
// GET /contacts/create, mapped to the create() method,
// POST /contacts, mapped to the store() method,
// GET /contacts/{contact}, mapped to the show() method,
// GET /contacts/{contact}/edit, mapped to the edit() method,
// PUT/PATCH /contacts/{contact}, mapped to the update() method,
// DELETE /contacts/{contact}, mapped to the destroy() method.
