<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{   //controlador que llama a la vista listado del directorio materias
    public function index(){
        return view('materias.listado');
    }
}
