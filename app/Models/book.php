<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'libro';
    protected $primaryKey = 'ISBN';
    public $timestamps = 'true';
}
