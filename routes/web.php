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

Route::get('/admin/index', 'Livros\LivrosController@inicio')->name('inicio_admin');
Route::get('/admin/meuslivros', 'Livros\LivrosController@meusLivros')->name('livros_admin');
Route::get('/admin/criar', 'Livros\LivrosController@create')->name('criar_livros');
Route::post('/admin/criar', 'Livros\LivrosController@enviar');
Route::delete('/admin/meuslivros/excluir/{id}', 'Livros\LivrosController@excluir');
Route::get('/admin/meuslivros/{id}/editar', 'Livros\LivrosController@editar');
Route::put('/admin/meuslivros/update/{id}', 'Livros\LivrosController@update');

Auth::routes();

Route::get('/entrar', 'Usuario\UsuarioController@inicio');
