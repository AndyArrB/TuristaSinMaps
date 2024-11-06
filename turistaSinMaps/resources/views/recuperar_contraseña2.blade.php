@extends('layout.plantillaCliente')

@section('contenido_recuperar_contraseña2')

@vite(['resources/css/stylem.css'])



    <div class="container3">

        <h1>Bienvenido</h1><br>
        <form action="{{ route('enviarnueva_contraseña') }}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="ncontraseña" class="form-label">Nueva contraseña</label>
            <input type="text" class="form-control" name="txtcontraseña" value="{{ old('txtcontraseña') }}">
            <small>{{ $errors->first('txtcontraseña') }}</small>
        </div>
        <div class="mb-3">
            <label for="confirmarcontraseña" class="form-label">Confirmar contraseña</label>
            <input type="text" class="form-control" name="txtconfirmarcontraseña" value="{{ old('txtconfirmarcontraseña') }}">
            <small>{{ $errors->first('txtconfirmarcontraseña') }}</small>
        </div>
        <button type="submit" class="btn btn-success">Establecer</button>
        </form>

    </div>




@endsection