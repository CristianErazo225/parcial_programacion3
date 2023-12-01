<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\book;

class libro extends Controller
{
    public function index(){
        $libros = DB::table('libro')->get(); //select * from facultad
        return view('librosview', ['book'=>$libros]);
       // return view('librosview');
    }
}
