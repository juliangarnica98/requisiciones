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
    return redirect('/panel');
});

Auth::routes();

Route::get('/entrevista/{id}', [App\Http\Controllers\InterviewController::class, 'index'])->name('entrevista');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/usuarios', [App\Http\Controllers\HomeController::class, 'index'])->name('usuarios');
Route::get('/entrevistas', [App\Http\Controllers\HomeController::class, 'index'])->name('entrevistas');
Route::get('/requisiciones', [App\Http\Controllers\HomeController::class, 'index'])->name('requisiciones');
