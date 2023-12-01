<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class libreria extends Controller
{
    public function index(){
        // $facultades = DB::table('facultad')->get(); //select * from facultad
         //return view('facultades.listado', ['faculty'=>$facultades]);
         return view('presentacionview');
     }
}
