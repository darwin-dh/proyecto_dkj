<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preguntas;
class preguntasController extends Controller
{
    //
        public function getPreguntas(){
        return response()->json(Preguntas::all(),200);
    }
}
