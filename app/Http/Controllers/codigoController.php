<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codigos;

class codigoController extends Controller
{
    
        public function getCodigos(){
        return response()->json(Codigos::all(),200);
    }
}
