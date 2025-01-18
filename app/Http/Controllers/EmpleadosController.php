<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::orderBy('id', 'desc')
        ->paginate(10);

        return view('empleados.index', compact('empleados'));
    }

    public function create(){
        return view('empleados.create');
    }

    public function store(Request $request){
        Empleado::create($request->all());
        return redirect()->route('empleados.index');
    }

    public function edit($id){
        $empleado = Empleado::find($id);
        return view('empleados.edit', compact('empleado'));

    }

    public function update(Request $request, $id){
        $empleado = Empleado::find($id);
        $empleado->update($request->all());
        return redirect()->route('empleados.index');
    }

    public function destroy($id){
        $empleado = Empleado::find($id);
        $empleado->delete();
        return redirect()->route('empleados.index');
    }
}

/*
NOTAS.
1.Laravel me permite omitir la opcion de buscar por id(::find($id)), en su lugar se utiliza el modelo seguido de la variable que se desea buscar,
ejemplo Empleado::find($id) seria lo mismo que Empleado $empleado. De esta manera laravel ya sabe que tiene que buscar el id que coincida con un registro existente en la DB.

2. Para optimizar paginas para SEO, se puede crear un campo llamado slug(debe ser unique) en el cual se coloca el contenido de ese registro
sin guiones o caracteres especiales, de esta manera me permite encontrar el registro seleccionado por el slug y no por el id
esto con la finalidad de optimizar el SEO.

Para configurarlo: en el model de la tabla donde se quiere optimizar con SEO se debe escribir el siguiente método:
public function getRouteKeyName()
    {
        return 'slug';
    }
De esta manera al momento de buscar el registro se utiliza el slug y no el id.
*/