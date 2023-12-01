<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\areal;

use Illuminate\Http\Request;

class area extends Controller
{
    public function index(){
         $areas = DB::table('areaconocimiento')->get();  
         return view('areasview', ['areal'=>$areas]);
         //return view('areasview');
     }
}
