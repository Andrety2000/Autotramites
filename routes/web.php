<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AutotramitesController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\AdminController;
use Faker\Guesser\Name;

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


Route::get('/', AutotramitesController::class,)->name('autotramites');
Route::get('/servicios',ServicioController::class,)->name('servicios');
Route::get('/redirect',[HomeController::class,'redirect'])->name('redirect');

//Inicio Route del Controlador Servicio//
Route::resource('/servicios', ServicioController::class);
Route::get('/servicios',[ServicioController::class,'servicios'])->name('servicios');
Route::get('/servicios',[ServicioController::class,'servicio'])->name('servicios.servicio');
Route::get('servicios', [ServicioController::class, 'create'])->name('servicios.create');
Route::post('servicios', [ServicioController::class, 'store'])->name('servicios.store');
//Fin Route del Controlador Servicio//


//Inicio Route del Controlador Admini//
Route::resource('/admin', AdminController::class);
Route::get('/admin', [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin', [AdminController::class, 'create'])->name('admin.create');
Route::post('admin',[AdminController::class,'store'])->name('admin.store');
Route::get('admin', AdminController::class, 'index')->name('admin.index');
Route::get('solicitud',[AdminController::class,'show'])->name('admin.show');
Route::get('admin.update',[AdminController::class,'update'])->name('admin.updete');
Route::post('admin.update',[AdminController::class,'update'])->name('admin.updete');
Route::post('admin.delete',[AdminController::class,'delete'])->name('admin.delete');
//Fin Route del Controlador Admin//

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/servicios', function () {
        return view('servicios');
    })->name('servicios');
});

//Inicio Route del Controlador Servicio//
Route::get('/servicio',[ServicioController::class,'servicio']);
Route::get('/traspaso',[ServicioController::class,'traspaso']);
Route::get('/traslado_cuenta',[ServicioController::class,'traslado_cuenta']);
Route::get('/peritaje',[ServicioController::class,'peritaje']);
Route::get('/matricula',[ServicioController::class,'matricula']);
Route::get('licencia',[ServicioController::class,'licencia']);
Route::get('/impronta',[ServicioController::class,'impronta']);
Route::get('/comparendos',[ServicioController::class,'comparendos']);
Route::get('/bateria',[ServicioController::class,'bateria']);
Route::get('/asesoria_juridica',[ServicioController::class,'asesoria_juridica']);
//Fin Route del Controlador Servicio//




Route::get('/view_category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
Route::get('/view_product',[AdminController::class,'view_product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/show_product',[AdminController::class,'show_prsoduct']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/update_product/{id}',[AdminController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);
Route::get('/search',[HomeController::class,'search']);








