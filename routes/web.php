<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //importar el controlador

use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\MateriasController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Va a llamar el dashboard al controlador HomeController
Route::get('/dashboard', [HomeController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Ruta para las facultades
Route::get('/facultades/listado', [FacultadesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_facultad'); // <-- Para que no acceda a la ruta sin logearse

//Ruta para las programas
Route::get('/programas/listado', [ProgramasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_programa'); // <-- Para que no acceda a la ruta sin logearse

//Ruta para las docentes
Route::get('/docentes/listado', [DocentesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_docente'); // <-- Para que no acceda a la ruta sin logearse

//Ruta para las estudiantes
Route::get('/estudiantes/listado', [EstudiantesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_estudiante'); // <-- Para que no acceda a la ruta sin logearse

//Ruta para las materias
Route::get('/materias/listado', [MateriasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_materia'); // <-- Para que no acceda a la ruta sin logearse

require __DIR__.'/auth.php';
