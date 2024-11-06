@extends('layout.plantillaCliente')

@section('contenido_recuperar_contraseña2')

@vite(['resources/css/stylem.css'])



    <div class="container3" style="text-align: center;">

        <h1>Contraseña establecida</h1><br>
        <p>¡El cambio ha sido realizado con éxito!</p>
        <a class="btn btn-highlight btn-secondary" href="{{ route('inicio_sesion') }}">Iniciar sesión</a>

    </div>




@endsection