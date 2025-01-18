@extends('layouts.app')

@section('title', 'Crear empleado')

@section('content')
    <h1>Crear empleado</h1>
    <form action="{{route('empleados.store')}}" method="POST">
        @csrf
            <label for="nombre" class="form-label">
                Nombre: 
                <input required type="text" class="form-control" id="nombre" name="nombre">
            </label>
            <br>
            <label for="telefono" class="form-label">
                Telefono:
                <input required type="text" class="form-control" id="telefono" name="telefono">
            </label>
            <br>
            <label for="correo" class="form-label">
                Correo:
                <input required type="text" class="form-control" id="correo" name="correo">
            </label>
            <br>
        <button type="submit" class="btn btn-outline-primary">Guardar</button>
    </form>
    <br>

    <a href="{{route('empleados.index')}}" class="btn btn-outline-primary">Cancelar</a>
@endsection