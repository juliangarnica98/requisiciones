<?php


use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    // return view('welcome');
    return redirect('/dashboard');
});

Auth::routes();

Route::get('/respuesta/{id}', [App\Http\Controllers\InterviewController::class, 'index'])->name('entrevista');
Route::get('/getdataentrevista', [App\Http\Controllers\InterviewController::class, 'getData']);
// Route::post('/entrevista/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);



Route::group(['middleware' => ['auth','role:Admin']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\admin\HomeController::class, 'index']);
    //rutas de usuarios
    Route::get('/getusuaios', [App\Http\Controllers\admin\UserController::class, 'index']);
    Route::get('/usuario/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getusuario/{id}', [App\Http\Controllers\admin\UserController::class, 'show']);
    Route::put('/usuario/{id}', [App\Http\Controllers\admin\UserController::class, 'update']);
    Route::delete('/deleteuser/{id}', [App\Http\Controllers\admin\UserController::class, 'destroy']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\admin\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\admin\RequisitionController::class, 'index']);
    Route::get('/getdatarequisition', [App\Http\Controllers\admin\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\admin\InterviewController::class, 'store']);
});

Route::group(['prefix' => 'boss','middleware' => ['auth','role:Boss']], function() {
    Route::get('/requisiciones', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.requisiciones');
    Route::get('/crear-requisicion', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.crarrequisicion');
});