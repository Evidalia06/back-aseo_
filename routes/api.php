<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\inf_empresasController;
use App\Http\Controllers\Api\ConsejosController;
use App\Http\Controllers\Api\barriosController;
use App\Http\Controllers\api\carrosController;
use App\Http\Controllers\api\comunasController;
use App\Http\Controllers\api\conductorsController;
use App\Http\Controllers\api\horariosController;

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

//Trae inf empresa
Route::get('/getInfEmpresa', [inf_empresasController::class, 'getInfEmpresa']);
Route::post('/updateEmpresa', [inf_empresasController::class, 'updateEmpresa']);

//Ruta de conexion con tabla Consejos
Route::get('/getConsejos', [ConsejosController::class, 'getConsejos']);
Route::post('/setConsejos', [ConsejosController::class, 'setConsejos']);
Route::post('/updateConsejo', [ConsejosController::class, 'updateConsejo']);
Route::post('/addImage', [ConsejosController::class, 'addImage']);

//Ruta de conexion con la tabla barrios
Route::get('/getBarrios', [barriosController::class, 'getBarrios']);
Route::post('/setBarrio', [barriosController::class, 'setBarrio']);
Route::post('/updateBarrio', [barriosController::class, 'updateBarrio']);

//Ruta de conexion con la tabla carros
Route::get('/getCarros', [carrosController::class, 'getCarros']);
Route::post('/setCarro', [carrosController::class, 'setCarro']);
Route::post('/updateCarro', [carrosController::class, 'updateCarro']);

//Ruta de conexion con la tabla comuna
Route::get('/getComunas', [comunasController::class, 'getComunas']);
Route::post('/setComuna', [comunasController::class, 'setComuna']);
Route::post('/updateComuna', [comunasController::class, 'updateComuna']);

//Ruta de conexion con la tabla conductores
Route::get('/getConductores', [conductorsController::class, 'getConductores']);
Route::post('/setConductor', [conductorsController::class, 'setConductor']);
Route::post('/updateConductor', [conductorsController::class, 'updateConductor']);

//Ruta de conexion con la tabla conductores
Route::get('/getHorarios', [horariosController::class, 'getHorarios']);
Route::post('/setHorario', [horariosController::class, 'setHorario']);
Route::post('/updateHorario', [horariosController::class, 'updateHorario']);


