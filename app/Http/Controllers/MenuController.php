<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    //
       public function getMenu(){
        return response()->json(Menu::all(),200);
        }

}
