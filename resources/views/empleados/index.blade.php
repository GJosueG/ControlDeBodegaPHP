@extends('layouts.app')

@section('title', 'Lista de empleados')
@php
    $contador = 1;
@endphp

@section('content')
    <h1>Lista de empleados</h1>
    <a href="{{route('empleados.create')}}" class="btn btn-outline-primary">Crear empleado</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $contador}}</td>    
                    <td>{{ $empleado->nombre }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>{{ $empleado->correo }}</td>
                    <td>
                        <a href="{{route('empleados.edit', $empleado->id)}}" class="btn btn-outline-primary">Editar</a>
                        <form action="{{route('empleados.destroy', $empleado->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>
                @php
                    $contador++;
                @endphp
            @endforeach
        </tbody>
    </table>

    {{ $empleados->links() }}
@endsection