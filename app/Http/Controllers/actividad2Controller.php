<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actividad2Controller extends Controller
{
    public function index(){
        return view('cliente.actividad2',['nameActividad'=>'actividad2']);
    }
}