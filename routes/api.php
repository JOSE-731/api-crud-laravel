<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::get('/articulos', 'App/Http/Controllers/ArticuloController@index'); //retorna todos los datos
Route::post('/articulos', 'App/Http/Controllers/ArticuloController@store'); //post para enviar
Route::put('/articulos{id}', 'App/Http/Controllers/ArticuloController@update'); //put actualizar
Route::delete('/articulos{id}', 'App/Http/Controllers/ArticuloController@destroy'); //para eliminar*/

Route::get('/articulos', [ArticuloController::class,'index']);
Route::post('/articulos', [ArticuloController::class,'store']);
Route::put('/articulos/{id}', [ArticuloController::class,'update']);
Route::delete('/articulos/{id}', [ArticuloController::class,'destroy']);

/* Ejemplo

get: http://127.0.0.1:8000/api/articulos
post: http://127.0.0.1:8000/api/articulos
delete: http://127.0.0.1:8000/api/articulos/1

    {
        "id": 0,
        "articulo": "diana arroz v2",
        "precio": 20033,
        "stock": 5300,
        "created_at": null,
        "updated_at": null
    }
*/
