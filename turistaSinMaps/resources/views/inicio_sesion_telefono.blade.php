@extends('layout.plantillaX')

@section('contenido_inicio_sesion')

@vite(['resources/css/stylem.css'])

<div class="mt-3">
    <h3>Iniciar Sesión con Teléfono</h3>
    <form action="{{ route('solicitar_codigo_telefono') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Número de Teléfono</label>
            <input type="tel" name="telefono" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Enviar Código</button>
    </form>
</div>

@endsection