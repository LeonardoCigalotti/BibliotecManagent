<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451

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
=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
    return $request->user();
});
