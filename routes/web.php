<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CRUD\AlumnosController;
use App\Http\Controllers\CRUD\CursosController;
use App\Http\Controllers\CRUD\DocenteController;
use App\Http\Controllers\CRUD\EventoController;
use App\Http\Controllers\CRUD\ExpedienteController;
use App\Http\Controllers\CRUD\GradosController;
use App\Http\Controllers\CRUD\PagosController;
use App\Http\Controllers\CRUD\TareasController;
use App\Http\Controllers\Pagos\AlumController;
use App\Http\Controllers\Pagos\NominaController;
use App\Http\Controllers\PerfilController;
use App\Models\PagoAlumno;
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
    return view('welcome');
});
Route::get('/salir', function () {
    $vistas = view('welcome');
    return $vistas;
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* PERFIL */
Route::get('/newPassword',[PerfilController::class,'newPassword'])->name('newPassword')->middleware('auth');
Route::post('/change/password',[PerfilController::class,'changePassword'])->name('changePassword');

/* ALUMNOS */
Route::get('/alumnos',[AlumnosController::class,'index'])->name('alumnos.index');
Route::get('/alumnos/nuevo', [AlumnosController::class, 'create'])->name('alumnos.create');
Route::post('/alumno/registrar', [AlumnosController::class, 'store'])->name('alumnos.store');
Route::get('/alumno/{alumno}', [AlumnosController::class, 'show'])->name('alumnos.show');
Route::get('/alumnos/{alumnos}/editar', [AlumnosController::class, 'edit'])->name('alumnos.editar');
Route::put('/alumnos/{alumnos}', [AlumnosController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/{alumno}', [AlumnosController::class,'destroy'])->name('alumnos.destroy');


/* GRADO */
Route::get('/grados',[GradosController::class,'index'])->name('grados.index');
Route::get('/grados/nuevo', [GradosController::class, 'create'])->name('grados.create');
Route::post('/grados/registrar', [GradosController::class, 'store'])->name('grados.store');

Route::get('/alumnos/grados/{id}', [GradosController::class, 'obtenerAlumnos'])->name('alumnos.lista');
Route::delete('/grados/{grado}', [GradosController::class,'destroy'])->name('grados.destroy');

/* LISTA DE ALUMNOS */
/* Route::get('/lista/grado/{grado_id}',[AlumnosController::class,'lista'])->name('alumnos.lista');
 */
/* Route::get('grado/{gradoId}',[GradosController::class,'lista'])->name('alumnos.lista');
 */
/* DOCENTES */
Route::get('/docentes',[DocenteController::class,'index'])->name('docentes.index');
Route::get('/docentes/nuevo', [DocenteController::class, 'create'])->name('docentes.create');
Route::post('/docentes/registrar', [DocenteController::class, 'store'])->name('docentes.store');
Route::get('/docentes/{docente}', [DocenteController::class, 'show'])->name('docentes.show');
Route::get('/docentes/{docentes}/editar', [DocenteController::class, 'edit'])->name('docentes.editar');
Route::put('/docentes/{docentes}', [DocenteController::class, 'update'])->name('docentes.update');
Route::delete('/docentes/{docente}', [DocenteController::class,'destroy'])->name('docentes.destroy');

/* PAGOS */
Route::get('/nomina',[NominaController::class,'index'])->name('nomina.index');
Route::get('/pagoAlumnos',[AlumController::class,'index'])->name('pago.index');
/* NOMINA */
Route::get('/nomina/nuevo', [NominaController::class, 'create'])->name('nomina.create');
Route::post('/nomina/registro', [NominaController::class, 'store'])->name('nomina.store');
Route::get('/nomina/{nominas}/editar', [NominaController::class, 'edit'])->name('nomina.editar');
Route::put('/nomina/{nominas}', [NominaController::class, 'update'])->name('nomina.update');
Route::delete('/nomina/{nominas}', [NominaController::class,'destroy'])->name('nomina.destroy');

/* PAGO ALUMNOS */
Route::get('/pagos/nuevo', [AlumController::class, 'create'])->name('pago.create');
Route::post('/pagos/registro', [AlumController::class, 'store'])->name('pago.store');
Route::get('/pagos/{pagos}/editar', [AlumController::class, 'edit'])->name('pago.editar');
Route::put('/pagos/{pagos}', [AlumController::class, 'update'])->name('pago.update');
Route::delete('/pagos/{pagos}', [AlumController::class,'destroy'])->name('pago.destroy');

/* EVENTOS */
Route::get('/evento',[EventoController::class,'index'])->name('evento');
/* EVENTOS */
/* 7. RUTA PARA REGISTRAR */
Route::post('/evento/agregar', [EventoController::class, 'store'])->name('eventos.agregar');
/* 11. MOSTRAR LOS DATOS */
Route::post('/evento/mostrar', [EventoController::class, 'show'])->name('evento.mostrar');
/* 14. CONSULTAR INFORMACION */
Route::post('/evento/editar/{id}', [EventoController::class, 'edit'])->name('evento.editar');
/* 22.Actualizar informacion */
Route::post('/evento/actualizar/{evento}', [EventoController::class, 'update'])->name('evento.actualizar');
/* 20. RUTA PARA BORRAR */
Route::post('/evento/borrar/{id}', [EventoController::class, 'destroy'])->name('evento.borrar');


/* TAREAS */
Route::get('/tareas',[TareasController::class,'index'])->name('tareas');
Route::get('/nota/nuevo',[TareasController::class,'create'])->name('nota.create');
Route::post('/nota/registro', [TareasController::class, 'store'])->name('nota.store');


/* GESTOR ARCHIVOS */
Route::get('/expedientes',[ExpedienteController::class,'index'])->name('expedientes.index');
Route::get('/expedientes/nuevo',[ExpedienteController::class,'create'])->name('expedientes.create');
Route::post('/expedientes/registro', [ExpedienteController::class, 'store'])->name('expedientes.store');
Route::delete('borrar/{file}', [ExpedienteController::class, 'destroy'])->name('expedientes.destroy');

