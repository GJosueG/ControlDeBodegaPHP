@extends('layouts.app')

@section('title', 'Formulario calculadora')

@section('content')
    <h1>Calculadora para operaciones básicas</h1>
    <form action="{{ route('calculadora.sumar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="n1" class="form-label">Primer número</label>
            <input type="number" class="form-control" id="n1" placeholder="Ingrese un numero entero">
        </div>
        <div class="mb-3">
            <label for="n2" class="form-label">Segundo número</label>
            <input type="number" class="form-control" id="n2" placeholder="Ingrese un numero entero">
        </div>
        <button type="submit" class="btn btn-outline-primary">Sumar</button>

        <p>La respuesta es: <span>{{$respuesta}}</span> </p>
    </form>

@endsection
