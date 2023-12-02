<?php

use App\Http\Controllers\ApiLugarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//////////////////////// Categoria ///////////////////////////////////////////////
Route::get('/categoria',[ApiLugarController::class,'indexCategoria']);
Route::post('/categoria',[ApiLugarController::class,'storeCategoria']);
Route::get('/categoria/{id_categoria}',[ApiLugarController::class,'getCategoriaById']);
Route::delete('categoria/{id_categoria}',[ApiLugarController::class,'destroyCategoria']);
Route::put('categoria/{id_categoria}',[ApiLugarController::class,'updateCategoria']);

//////////////////////// Estado ///////////////////////////////////////////////
Route::get('/estado',[ApiLugarController::class,'indexEstado']);
Route::post('/estado',[ApiLugarController::class,'storeEstado']);
Route::get('/estado/{id_estado}',[ApiLugarController::class,'getEstadoById']);
Route::delete('estado/{id_estado}',[ApiLugarController::class,'destroyEstado']);
Route::put('estado/{id_estado}',[ApiLugarController::class,'updateEstado']);

//////////////////////// Municipio ///////////////////////////////////////////////
Route::get('/municipio',[ApiLugarController::class,'indexMunicipio']);
Route::post('/municipio',[ApiLugarController::class,'storeMunicipio']);
Route::get('/municipio/{id_municipio}',[ApiLugarController::class,'getMunicipioById']);
Route::delete('municipio/{id_municipio}',[ApiLugarController::class,'destroyMunicipio']);
Route::put('municipio/{id_municipio}',[ApiLugarController::class,'updateMunicipio']);

//////////////////////// Sitio ///////////////////////////////////////////////
Route::get('/sitio',[ApiLugarController::class,'indexSitio']);
Route::post('/sitio',[ApiLugarController::class,'storeSitio']);
Route::get('/sitio/{id_sitio}',[ApiLugarController::class,'getSitioById']);
Route::delete('sitio/{id_sitio}',[ApiLugarController::class,'destroySitio']);
Route::put('sitio/{id_sitio}',[ApiLugarController::class,'updateSitio']);

//////////////////////// Direccion ///////////////////////////////////////////////
Route::get('/direccion',[ApiLugarController::class,'indexDireccion']);
Route::post('/direccion',[ApiLugarController::class,'storeDireccion']);
Route::get('/direccion/{id_direccion}',[ApiLugarController::class,'getDireccionById']);
Route::delete('direccion/{id_direccion}',[ApiLugarController::class,'destroyDireccion']);
Route::put('direccion/{id_direccion}',[ApiLugarController::class,'updateDireccion']);