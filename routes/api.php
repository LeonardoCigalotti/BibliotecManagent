<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\Http\Controllers\Usuario\UsuarioController;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
Route::get('/newuser', 'Usuario\UsuarioController@novoRegistro');
Route::get('/entrar', 'Usuario\UsuarioController@entrar');
