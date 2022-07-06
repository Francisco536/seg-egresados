<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EgresadoController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\EstadisticasController;
use App\Http\Controllers\PertinenciaController;
use App\Http\Controllers\UbicacionLabController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

// Route::get('/admin', function () {
//     return view('admin.index');
// });

// Route::post('/admin/create', [AdminController::class, 'create']);
// Route::resource('admin', AdminController::class)->middleware('auth');

Auth::routes();

Route::get('/home', function () {
        return view('home');
})->name('home')->middleware('auth');

// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/admin/index', [AdminController::class, 'index'])->name('lista');
// });

Route::group(['prefix' => 'admin'], function(){
    Route::get('/index', [AdminController::class, 'index'])->name('lista.admin')->middleware('auth');
    Route::get('/create', [AdminController::class, 'create'])->name('add.admin')->middleware('auth');
    Route::post('/store', [AdminController::class, 'store'])->name('store.admin')->middleware('auth');
    Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('edit.admin')->middleware('auth');
    Route::post('/update/{id}', [AdminController::class, 'update'])->name('update.admin')->middleware('auth');
    Route::get('destroy/{admin}', [AdminController::class, 'destroy'])->name("destroy.admin")->middleware('auth');

});
Route::group(['prefix' => 'egresado'], function(){
    Route::get('/index', [EgresadoController::class, 'index'])->name('lista.egresado')->middleware('auth');
    Route::get('/create', [EgresadoController::class, 'create'])->name('add.egresado')->middleware('auth');
    Route::post('/store', [EgresadoController::class, 'store'])->name('store.egresado')->middleware('auth');
    Route::get('/{id}/edit', [EgresadoController::class, 'edit'])->name('edit.egresado')->middleware('auth');
    Route::post('/update/{id}', [EgresadoController::class, 'update'])->name('update.egresado')->middleware('auth');
    Route::get('destroy/{egresado}', [EgresadoController::class, 'destroy'])->name("destroy.egresado")->middleware('auth');
});

Route::group(['prefix' => 'encuesta'], function(){
    Route::get('/index', [EncuestaController::class, 'index'])->name('lista.encuesta')->middleware('auth');
    Route::get('/realizadas', [EncuestaController::class, 'realizadas'])->name('realizadas.encuesta')->middleware('auth');
    Route::get('/responder', [EncuestaController::class, 'create'])->name('add.encuesta')->middleware('auth');
    Route::post('/store', [EncuestaController::class, 'store'])->name('store.encuesta')->middleware('auth');
    Route::get('/{id}/detalle', [EncuestaController::class, 'show'])->name('ver.encuesta')->middleware('auth');
    Route::get('/finalizada', [EncuestaController::class, 'end'])->name('end.encuesta')->middleware('auth');
});

Route::group(['prefix' =>'estadisticas'], function(){
    Route::get('/index', [EstadisticasController::class, 'index'])->name('lista.estadistica')->middleware('auth');

});
