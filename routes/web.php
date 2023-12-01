<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //importar el controlador
;

use App\Http\Controllers\libro;
use App\Http\Controllers\area;
use App\Http\Controllers\libreria;


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
    return view('dashboard');
});

// //Ruta para libro ---------------------------------------------------------------------------------------
 Route::get('/christian/libros', [libro::class, 'index'] 
 )->name('listado_libro'); // <-- Para que no acceda a la ruta sin logearse

 //Ruta para area ---------------------------------------------------------------------------------------
 Route::get('/christian/areas', [area::class, 'index'] 
 )->name('listado_area'); // <-- Para que no acceda a la ruta sin logearse

 //Ruta para libreria ---------------------------------------------------------------------------------------
 Route::get('/christian/presentacion', [libreria::class, 'index'] 
 )->name('listado_libreria'); // <-- Para que no acceda a la ruta sin logearse

require __DIR__.'/auth.php';
