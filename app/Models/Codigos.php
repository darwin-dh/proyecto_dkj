<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codigos extends Model
{
     public $timestamps = false;
     protected $filetable=['id','descripcion'];
}