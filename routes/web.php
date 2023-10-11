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

Auth::routes(['register' => false]);

Route::get('/respuesta/{id}', [App\Http\Controllers\InterviewController::class, 'index'])->name('entrevista');
Route::get('/getdataentrevista', [App\Http\Controllers\InterviewController::class, 'getData']);
Route::post('/entrevista/crear', [App\Http\Controllers\InterviewController::class, 'store']);
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
    Route::post('/usuario/store', [App\Http\Controllers\admin\UserController::class, 'store']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\admin\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\admin\RequisitionController::class, 'index']);
    Route::get('/getdatarequisition', [App\Http\Controllers\admin\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\admin\RequisitionController::class, 'update']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\admin\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\admin\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\admin\InterviewController::class, 'show']);
    //rutas de dashboard
    Route::get('/getdatainterview/{id}',[App\Http\Controllers\admin\Dashboard::class, 'getdata']);
});

Route::group(['prefix' => 'boss','middleware' => ['auth','role:Boss']], function() {
    //rutas de navegacion
    Route::get('/requisiciones', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.requisiciones');
    Route::get('/crear-requisicion', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.crarrequisicion');
    //rutas de requisicion
    Route::get('/getdatarequisition', [App\Http\Controllers\boss\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\boss\RequisitionController::class, 'store']);
    Route::get('/getrequisition', [App\Http\Controllers\boss\RequisitionController::class, 'index']);
    Route::get('/requisicion/{id}',[App\Http\Controllers\boss\HomeController::class, 'index']);
    Route::get('/getrequisicion/{id}',[App\Http\Controllers\boss\RequisitionController::class, 'show']);
    Route::post('/requisicion/edit', [App\Http\Controllers\boss\RequisitionController::class, 'update']);
});

Route::group(['prefix' => 'director','middleware' => ['auth','role:Director']], function() {
    //rutas de navegacion
    Route::get('/requisicionesregional', [App\Http\Controllers\director\HomeController::class, 'index'])->name('director.requisicionesregional');
    Route::get('/requisiciones', [App\Http\Controllers\director\HomeController::class, 'index'])->name('director.requisiciones');
    Route::get('/crear-requisicion', [App\Http\Controllers\director\HomeController::class, 'index'])->name('director.crarrequisicion');
    //rutas de requisicion
    Route::get('/getdatarequisition', [App\Http\Controllers\director\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\director\RequisitionController::class, 'store']);
    Route::get('/getrequisition', [App\Http\Controllers\director\RequisitionController::class, 'index']);
    Route::get('/requisicion/{id}',[App\Http\Controllers\director\HomeController::class, 'index']);
    Route::get('/getrequisicion/{id}',[App\Http\Controllers\director\RequisitionController::class, 'show']);
    Route::post('/requisicion/edit', [App\Http\Controllers\director\RequisitionController::class, 'update']);
});


Route::group(['prefix' => 'recruiter','middleware' => ['auth','role:Recruiter']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\recruiter\HomeController::class, 'index']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\recruiter\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\recruiter\RequisitionController::class, 'index']);
    Route::get('/getdatarequisition', [App\Http\Controllers\recruiter\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\recruiter\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\recruiter\RequisitionController::class, 'update']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\recruiter\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\recruiter\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\recruiter\InterviewController::class, 'show']);
});


Route::group(['prefix' => 'generalist','middleware' => ['auth','role:Generalist']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\generalist\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\generalist\RequisitionController::class, 'index']);
    Route::get('/getdatarequisition', [App\Http\Controllers\generalist\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\generalist\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\generalist\RequisitionController::class, 'update']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\generalist\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\generalist\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\generalist\InterviewController::class, 'show']);
});