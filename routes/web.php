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

Route::get('/admin/minhasreservas', 'Reservas\ReservasController@inicio');
Route::get('/admin/reservar/{id}', 'Reservas\ReservasController@reservar');
Route::post('/admin/reservar/{id}', 'Reservas\ReservasController@enviarReserva');

Auth::routes();

Route::get('/', 'Usuario\UsuarioController@inicio');
Route::get('/entrar', 'Usuario\UsuarioController@login');
Route::post('/entrar', 'Usuario\UsuarioController@entrar');
Route::get('/registrar', 'Usuario\UsuarioController@registrar');
Route::post('/registrar', 'Usuario\UsuarioController@novoRegistro');
Route::get('/admin/perfil', 'Usuario\UsuarioController@perfil');
Route::post('/admin/perfil/editar/{id}', 'Usuario\UsuarioController@editar');
Route::get('/sair', function(){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/entrar');
});
