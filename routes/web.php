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
    if (Auth::check()) {
        return redirect()->intended(url()->previous());
    }else{
        return redirect()->route('login');
    }
})->middleware(['redirectIfAuthenticated']);

Route::get('/login', function () {
    return redirect()->intended(url()->previous());
})->middleware('redirectIfAuthenticated');

Auth::routes(['register' => false]);

Route::get('/respuesta/{id}', [App\Http\Controllers\InterviewController::class, 'index'])->name('entrevista');
Route::get('/getdataentrevista', [App\Http\Controllers\InterviewController::class, 'getData']);
Route::get('/getDataTienda/{regional}', [App\Http\Controllers\InterviewController::class, 'getDataTienda']);
Route::post('/entrevista/crear', [App\Http\Controllers\InterviewController::class, 'store']);
// Route::post('/entrevista/store', [App\Http\Controllers\admin\RequisitionController::class, 'store']);


Route::group(['middleware' => ['auth','CheckRoute:web']], function() {
    Route::get('/getdatainterview/{id}/{init}/{end}/{marca?}/{cargo?}',[App\Http\Controllers\admin\Dashboard::class, 'getdata']);
    Route::get('/getdatarequisition/{init}/{end}',[App\Http\Controllers\admin\Dashboard::class, 'getdata2']);

    Route::get('retreat/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_retreat']);
    Route::get('/store/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_type']);
    Route::get('/vacant/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_vacant']);
    Route::get('/vacant/exportclose/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_vacant_close']);
    Route::get('/area/export/{area}/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_area']);
    Route::get('/admin/export/{inicio}/{fin}', [App\Http\Controllers\ReportController::class, 'export_admin']);
});

//rutas jefe
Route::group(['middleware' => ['auth','handle403','role:Admin','CheckRoute:web','forbidden']], function() {
    
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
    Route::get('/reclutador/reasignar', [App\Http\Controllers\admin\UserController::class, 'getRecuriter']);
    Route::put('/usuario/{id}', [App\Http\Controllers\admin\UserController::class, 'update']);
    Route::delete('/deleteuser/{id}', [App\Http\Controllers\admin\UserController::class, 'destroy']);
    Route::post('/usuario/store', [App\Http\Controllers\admin\UserController::class, 'store']);
    Route::post('/newjefe/reasignar', [App\Http\Controllers\admin\UserController::class, 'asignar']);
    Route::post('/newreclutador/reasignar', [App\Http\Controllers\admin\UserController::class, 'asignarre']);

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

    //busqueda de usuarios
    Route::post('/user/search',[App\Http\Controllers\admin\UserController::class, 'search']);
    //rutas de dashboard
    // Route::get('/getdatainterview/{id}/{init}/{end}',[App\Http\Controllers\admin\Dashboard::class, 'getdata']);
});

Route::group(['prefix' => 'boss','middleware' => ['auth','handle403','role:Boss','CheckRoute:web','forbidden']], function() {
    //rutas de navegacion
    Route::get('/requisiciones', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.requisiciones');
    Route::get('/crear-requisicion', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.crarrequisicion');
    Route::get('/ver-tiendas', [App\Http\Controllers\boss\HomeController::class, 'index'])->name('boss.vertiendas');
    //rutas de requisicion
    Route::get('/getdatarequisition', [App\Http\Controllers\boss\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\boss\RequisitionController::class, 'store']);
    Route::get('/getrequisition', [App\Http\Controllers\boss\RequisitionController::class, 'index']);
    Route::get('/requisicion/{id}',[App\Http\Controllers\boss\HomeController::class, 'index']);
    Route::get('/getrequisicion/{id}',[App\Http\Controllers\boss\RequisitionController::class, 'show']);
    Route::post('/requisicion/edit', [App\Http\Controllers\boss\RequisitionController::class, 'update']);

    //rutas de tiendas de jefes
    Route::get('/getdatatiendas',[App\Http\Controllers\boss\TiendaController::class, 'getdata']);
    Route::get('/getdatatiendas2/{regional}',[App\Http\Controllers\boss\TiendaController::class, 'getdata2']);
    //rutas de busqyeda
    Route::post('/store/search',[App\Http\Controllers\boss\TiendaController::class, 'search']);
    //ruta de filtro
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\boss\RequisitionController::class, 'getfilter']);
});

Route::group(['prefix' => 'director','middleware' => ['auth','handle403','role:Director','CheckRoute:web','forbidden']], function() {
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
    //rutas de filtros
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\director\RequisitionController::class, 'getfilter']);
    Route::get('/getfiltro2/{area}/{jefe}/{estado?}', [App\Http\Controllers\director\RequisitionController::class, 'getfilter2']);
});

//rutas analista
Route::group(['prefix' => 'recruiter','middleware' => ['auth','handle403','role:Recruiter','CheckRoute:web','forbidden']], function() {
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

//rutas generalista
Route::group(['prefix' => 'generalist','middleware' => ['auth','handle403','role:Generalist','CheckRoute:web','forbidden']], function() {
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
//rutas de especialista
Route::group(['prefix' => 'specialist','middleware' => ['auth','handle403','role:Specialist','CheckRoute:web','forbidden']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/misrequisiciones', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/charges', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/holidays', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/tiendas', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\specialist\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\specialist\RequisitionController::class, 'index']);
    Route::get('/getrequisition2', [App\Http\Controllers\specialist\RequisitionController::class, 'index2']);
    Route::get('/getdatarequisition', [App\Http\Controllers\specialist\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\specialist\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\specialist\RequisitionController::class, 'update']);
    Route::post('/requisicion/edit2', [App\Http\Controllers\specialist\RequisitionController::class, 'update2']);
    Route::get('/getrequisitions', [App\Http\Controllers\specialist\RequisitionController::class, 'getDataRq']);
    Route::get('/getreclutadoras',[App\Http\Controllers\specialist\RequisitionController::class, 'getreclutadoras']);
    Route::post('/requisicion/detele',[App\Http\Controllers\specialist\RequisitionController::class, 'delete']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\specialist\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\specialist\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\specialist\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\specialist\InterviewController::class, 'show']);
    //rutas de cargos
    Route::get('/getdatacharges',[App\Http\Controllers\specialist\ChargeController::class, 'index']);
    Route::put('/charge/edit',[App\Http\Controllers\specialist\ChargeController::class, 'update']);
    Route::post('/charge/store',[App\Http\Controllers\specialist\ChargeController::class, 'store']);
    Route::delete('/deletecharge/{id}',[App\Http\Controllers\specialist\ChargeController::class, 'delete']);
    //rutas filtros
    Route::get('/getjefes/{regional}/{area}', [App\Http\Controllers\specialist\RequisitionController::class, 'getboss']);
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\specialist\RequisitionController::class, 'getfilter']);
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
//rutas generalista comercial
Route::group(['prefix' => 'generalistcomercial','middleware' => ['auth','handle403','role:Generalist_comercial','forbidden']], function() {
    //rutas de navegacion
    Route::get('/dashboard', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/usuarios', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/entrevistas', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/requisiciones', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/misrequisiciones', [App\Http\Controllers\generalist\HomeController::class, 'index']);
    Route::get('/charges', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/holidays', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/tiendas', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    //rutas de requisicion
    Route::get('/requisicion', [App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/requisiciones/{id}',[App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/requisiciones/{area}/{id}',[App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/getrequisicion/{area}/{id}',[App\Http\Controllers\generalistcomercial\RequisitionController::class, 'show']);
    Route::get('/getrequisition', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'index']);
    Route::get('/getrequisition2', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'index2']);
    Route::get('/getdatarequisition', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'getData']);
    Route::post('/requisicion/store', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'store']);
    Route::post('/requisicion/edit', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'update']);
    Route::post('/requisicion/edit2', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'update2']);
    Route::get('/getrequisitions', [App\Http\Controllers\generalistcomercial\RequisitionController::class, 'getDataRq']);
    Route::get('/getreclutadoras',[App\Http\Controllers\generalistcomercial\RequisitionController::class, 'getreclutadoras']);
    //rutas de entrevista
    Route::post('/entrevista/store', [App\Http\Controllers\generalistcomercial\InterviewController::class, 'store']);
    Route::get('/entrevistas/{id}',[App\Http\Controllers\generalistcomercial\HomeController::class, 'index']);
    Route::get('/getdatainterview', [App\Http\Controllers\generalistcomercial\InterviewController::class, 'getData']);
    Route::get('/getentrevistas/{id}',[App\Http\Controllers\generalistcomercial\InterviewController::class, 'show']);
    //rutas de cargos
    Route::get('/getdatacharges',[App\Http\Controllers\generalistcomercial\ChargeController::class, 'index']);
    Route::put('/charge/edit',[App\Http\Controllers\generalistcomercial\ChargeController::class, 'update']);
    Route::post('/charge/store',[App\Http\Controllers\generalistcomercial\ChargeController::class, 'store']);
    Route::delete('/deletecharge/{id}',[App\Http\Controllers\generalistcomercial\ChargeController::class, 'delete']);
    //rutas de festivos
    Route::get('/getholidays', [App\Http\Controllers\HolidaysController::class, 'getdata']);
    Route::put('/edit/holidays', [App\Http\Controllers\HolidaysController::class, 'update']);
    //rutas de tiendas
    Route::get('/getdatatiendas',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'getdata']);
    Route::get('/getdatatiendas2/{regional}',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'getdata2']);
    Route::delete('/deletetienda/{id}',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'destroy']);
    Route::put('/edit/tiendas',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'update']);
    Route::post('/tienda/store',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'store']);
    //rutas de busqyeda
    Route::post('/charge/search',[App\Http\Controllers\generalistcomercial\ChargeController::class, 'search']);
    Route::post('/store/search',[App\Http\Controllers\generalistcomercial\TiendaController::class, 'search']);

    Route::get('/getjefes/{regional}/{area}', [App\Http\Controllers\admin\RequisitionController::class, 'getboss']);
    Route::get('/getfiltro/{area}/{jefe}/{estado?}', [App\Http\Controllers\admin\RequisitionController::class, 'getfilter']);
});

Route::post('/interview/search',[App\Http\Controllers\admin\InterviewController::class, 'search']);
Route::post('/requisiton/search/esp',[App\Http\Controllers\admin\RequisitionController::class, 'search']);
Route::get('/traerjefe',[App\Http\Controllers\Api\admin\UsersController::class, 'UserBoss']);