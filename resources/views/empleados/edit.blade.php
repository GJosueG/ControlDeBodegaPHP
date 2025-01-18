@extends('layouts.app')

@section('title', 'Editar empleado')

@section('content')
    <h1>Editar empleado</h1>
    <form action="{{route('empleados.update', $empleado->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">
                Nombre: 
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$empleado->nombre}}">
            </label>
            
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$empleado->telefono}}">
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="correo" name="correo" value="{{$empleado->correo}}">
        </div>
        <button type="submit" class="btn btn-outline-primary">Modificar</button>
    </form>
    <br>

    <a href="{{route('empleados.index')}}" class="btn btn-outline-primary">Cancelar</a>
@endsection