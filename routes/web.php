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
Route::get('/getDiasHabiles',[App\Http\Controllers\recruiter\RequisitionController::class, 'getDiasHabiles']);

Route::get('/', function () {
    // return view('welcome');
    return redirect('/login');
});

Auth::routes(['register' => false]);

Route::get('/respuesta/{id}', [App\Http\Controllers\InterviewController::class, 'index'])->name('entrevista');
Route::get('/getdataentrevista', [App\Http\Controllers\InterviewController::class, 'getData']);
Route::get('/getDataTienda/{regional}', [App\Http\Controllers\InterviewController::class, 'getDataTienda']);
Route::post('/entrevista/crear', [App\Http\Controllers\InterviewController::class, 'store']);
// Route::post('/entrevista/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);


Route::group(['middleware' => ['auth']], function() {
    Route::get('/getdatainterview/{id}/{init}/{end}/{marca?}/{cargo?}',[App\Http\Controllers\admin\Dashboard::class, 'getdata']);
    Route::get('/getdatarequisition/{init}/{end}',[App\Http\Controllers\admin\Dashboard::class, 'getdata2']);

    Route::get('retreat/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_retreat']);
    Route::get('/store/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_type']);
    Route::get('/vacant/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_vacant']);
    Route::get('/area/export/{area}/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_area']);
});


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
    Route::get('/jefe/reasignar/{id}/{area}/{regional?}', [App\Http\Controllers\admin\UserController::class, 'getBoss']);
    Route::put('/usuario/{id}', [App\Http\Controllers\admin\UserController::class, 'update']);
    Route::delete('/deleteuser/{id}', [App\Http\Controllers\admin\UserController::class, 'destroy']);
    Route::post('/usuario/store', [App\Http\Controllers\admin\UserController::class, 'store']);
    Route::post('/newjefe/reasignar', [App\Http\Controllers\admin\UserController::class, 'asignar']);

    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\admin\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\admin\RequisitionController::class, 'index']);
    Route::get('/getdatarequisition', [App\Http\Controllers\admin\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\admin\RequisitionController::class, 'update']);
    Route::post('/requisicion/edit2', [App\Http\Controllers\admin\RequisitionController::class, 'update2']);
    //rutas filtros
    Route::get('/getjefes/{regional}/{area}', [App\Http\Controllers\admin\RequisitionController::class, 'getboss']);
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\admin\RequisitionController::class, 'getfilter']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\admin\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\admin\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\admin\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\admin\InterviewController::class, 'show']);
    //rutas de dashboard
    // Route::get('/getdatainterview/{id}/{init}/{end}',[App\Http\Controllers\admin\Dashboard::class, 'getdata']);
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
    Route::get('/requisiciones-regional', [App\Http\Controllers\director\HomeController::class, 'index']);
    
    //rutas de requisicion
    Route::get('/getdatarequisition', [App\Http\Controllers\director\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\director\RequisitionController::class, 'store']);
    Route::get('/getrequisition', [App\Http\Controllers\director\RequisitionController::class, 'index']);
    Route::get('/requisicion/{id}',[App\Http\Controllers\director\HomeController::class, 'index']);
    Route::get('/getrequisicion/{id}',[App\Http\Controllers\director\RequisitionController::class, 'show']);
    Route::get('/getrequisicion-regional',[App\Http\Controllers\director\RequisitionController::class, 'index2']);
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
    Route::get('/getrequisition2', [App\Http\Controllers\recruiter\RequisitionController::class, 'index2']);
    Route::get('/getdatarequisition', [App\Http\Controllers\recruiter\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\recruiter\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\recruiter\RequisitionController::class, 'update']);
    Route::post('/requisicion/edit2', [App\Http\Controllers\recruiter\RequisitionController::class, 'update2']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\recruiter\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\recruiter\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\recruiter\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\recruiter\InterviewController::class, 'show']);

    //rutas filtros
    Route::get('/getjefes/{regional}/{area}', [App\Http\Controllers\admin\RequisitionController::class, 'getboss']);
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\admin\RequisitionController::class, 'getfilter']);
});


Route::group(['prefix' => 'generalist','middleware' => ['auth','role:Generalist']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/misrequisiciones', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/charges', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/holidays', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/tiendas', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\generalist\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\generalist\RequisitionController::class, 'index']);
    Route::get('/getrequisition2', [App\Http\Controllers\generalist\RequisitionController::class, 'index2']);
    Route::get('/getdatarequisition', [App\Http\Controllers\generalist\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\generalist\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\generalist\RequisitionController::class, 'update']);
    Route::post('/requisicion/edit2', [App\Http\Controllers\generalist\RequisitionController::class, 'update2']);
    Route::get('/getrequisitions', [App\Http\Controllers\generalist\RequisitionController::class, 'getDataRq']);
    Route::get('/getreclutadoras',[App\Http\Controllers\generalist\RequisitionController::class, 'getreclutadoras']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\generalist\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\generalist\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\generalist\InterviewController::class, 'show']);
    //rutas de cargos
    Route::get('/getdatacharges',[App\Http\Controllers\generalist\ChargeController::class, 'index']);
    Route::put('/charge/edit',[App\Http\Controllers\generalist\ChargeController::class, 'update']);
    Route::post('/charge/store',[App\Http\Controllers\generalist\ChargeController::class, 'store']);
    Route::delete('/deletecharge/{id}',[App\Http\Controllers\generalist\ChargeController::class, 'delete']);
    //rutas filtros
    Route::get('/getjefes/{regional}/{area}', [App\Http\Controllers\admin\RequisitionController::class, 'getboss']);
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\admin\RequisitionController::class, 'getfilter']);
    //rutas de festivos
    Route::get('/getholidays', [App\Http\Controllers\HolidaysController::class, 'getdata']);
    Route::put('/edit/holidays', [App\Http\Controllers\HolidaysController::class, 'update']);
    //rutas de tiendas
    Route::get('/getdatatiendas',[App\Http\Controllers\generalist\TiendaController::class, 'getdata']);
    Route::get('/getdatatiendas2/{regional}',[App\Http\Controllers\generalist\TiendaController::class, 'getdata2']);
    Route::delete('/deletetienda/{id}',[App\Http\Controllers\generalist\TiendaController::class, 'destroy']);
    Route::put('/edit/tiendas',[App\Http\Controllers\generalist\TiendaController::class, 'update']);
    Route::post('/tienda/store',[App\Http\Controllers\generalist\TiendaController::class, 'store']);
    //rutas de busqyeda
    Route::post('/charge/search',[App\Http\Controllers\generalist\ChargeController::class, 'search']);
    Route::post('/store/search',[App\Http\Controllers\generalist\TiendaController::class, 'search']);
});