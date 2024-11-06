@extends('layout.plantillaCliente')

@section('contenido_recuperar_contraseña2')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        <h1>Bienvenido</h1><br>
        <form>
        <div class="mb-3">
            <label for="ncontraseña" class="form-label">Nueva contraseña</label>
            <input type="text" class="form-control" id="txtncontraseña">
        </div>
        <div class="mb-3">
            <label for="confirmarcontraseña" class="form-label">Confirmar contraseña</label>
            <input type="text" class="form-control" id="txtconfirmarcontraseña">
        </div>
        <button type="submit" class="btn btn-success">Establecer</button>
        </form>

    </div>




@endsection