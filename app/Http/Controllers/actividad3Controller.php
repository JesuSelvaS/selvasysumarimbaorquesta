<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actividad3Controller extends Controller
{
    public function index(){
        return view('cliente.actividad3',['nameActividad'=>'actividad3']);
    }
}
