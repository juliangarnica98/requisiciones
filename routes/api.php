<?php

use App\Http\Controllers\Api\Admin\HeadersController;
use App\Http\Controllers\Api\Admin\QuestionsController;
use App\Http\Controllers\Api\Admin\RegionalsController;
use App\Http\Controllers\Api\Admin\StoresController;
use App\Http\Controllers\Api\Admin\UsersController;
use App\Http\Controllers\Api\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'auth:sanctum'], function ($router) {
    //ruta admin para registar nuevo usuario
    
    //ruta admin para consultar usuarios, actualizar y eliminar usuarios
    Route::resource('users',UsersController::class);
    //ruta admin para manejo de tiendas
    Route::resource('stores',StoresController::class);
    //ruta admin para manejo de regionales
    Route::resource('regionals',RegionalsController::class);
    //ruta admin para manejo de encabezados de preguntas
    Route::resource('headers',HeadersController::class)->except(['create','store','destroy','edit']);
    //ruta admin para manejo de preguntas
    Route::resource('questions',QuestionsController::class);
    //ruta para salir de session
    Route::post('/logout',[App\Http\Controllers\Api\Auth\AuthController::class, 'logout']);
    //ruta para registar
    Route::post('/register',[App\Http\Controllers\Api\Auth\AuthController::class, 'register']);
    //ruta para consultar tiendas por regional para la creacion de usuarios
    Route::get("/getstores", [App\Http\Controllers\Api\Admin\StoresController::class,"getstores"]); 
    //ruta para traer  las preguntas segun el encabezado que se le pasa como parametro
    Route::get("/getquestion/{id}", [App\Http\Controllers\Api\Admin\QuestionsController::class,"getData"]);
    //ruta para traer regionales con status 1
    Route::get("/regionals2", [App\Http\Controllers\Api\Admin\RegionalsController::class,"index2"]); 
    //ruta para calcular semanas de creacion de usuario
    Route::get("/semanas", [App\Http\Controllers\Api\Admin\AnswersController::class,"index"]); 
    //ruta para registrar formulario
    Route::post("/respuesta", [App\Http\Controllers\Api\Admin\AnswersController::class,"store"]);
    //ruta para consultar respuestas de preguntas
    Route::get("/getanswer/{id}", [App\Http\Controllers\Api\Admin\AnswersController::class,"show"]);
    //ruta para consultar tiendas
    Route::post("/search", [App\Http\Controllers\Api\Admin\UsersController::class,"search"]);
});


Route::post('/login', [\App\Http\Controllers\Api\Auth\AuthController::class, 'login']);