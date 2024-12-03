@extends('layout.plantillaX')
@section('contenido_inicio_sesion')
@section('contenido')
<div class="container3">
    <h2>Verificación por Teléfono</h2>
    <form action="{{ route('verificar_codigo_telefono') }}" method="POST">
        @csrf
        <input type="hidden" name="telefono" value="{{ $telefono }}">
        <div class="mb-3">
            <label>Código de Verificación</label>
            <input type="text" name="codigo" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Verificar</button>
    </form>
</div>
@endsection
