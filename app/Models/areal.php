<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class areal extends Model
{   //enlazado a la tabla facultad
    protected $table = 'areaconocimiento';
    protected $primaryKey = 'idArea';
    public $timestamps = 'true';
}
