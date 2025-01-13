<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function index(){
        return view('calculadora');
    }

    public function sumar($n1, $n2){
        $respuesta= $n1+$n2;
        return view('calculadora', compact('respuesta'));
    }
}
