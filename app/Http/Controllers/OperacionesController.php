<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    // public function sumar($n1, $n2)
    // {
    //     $respuesta = $n1 + $n2;
    //     return view('calculadora', compact('respuesta'));
    // }

    public function create($nombre)
    {
        $estado = new Estado();
        $estado->nombre = $nombre;
        $estado->save();
        return $estado;
    }
    public function update($id)
    {
        $estado = Estado::find($id);
        $estado->nombre = "Inactivo Modificado";
        $estado->save();
        return $estado;
    }
    public function show($id)
    {
        $estado = Estado::find($id);
        return $estado;
    }
    public function showAll()
    {
        $estado = Estado::all();
        return $estado;
    }
    public function delete($id)
    {
        $estado = Estado::find($id);
        $estado->delete();
        return "Eliminado correctamente";
    }
}
