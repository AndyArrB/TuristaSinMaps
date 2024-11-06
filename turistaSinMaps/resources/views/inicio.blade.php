@extends('layout.plantillaCliente')

@section('contenido_inicio')
@vite(['resources/css/stylem.css'])
    <div class="container2">
        <h1>Turista sin Maps</h1>
        <h4>¡Bienvenido!</h4>
        <a href="{{route('registro')}}" class="btn btn-highlight btn-secondary">Comenzar</a>
    </div>
    

@endsection