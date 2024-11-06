@extends('layout.plantillaCliente')

@section('contenido_inicio_sesion')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        <h1>Bienvenido</h1><br>
        <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="txtemail">
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="txtcontraseña">
        </div>
        <a href="#">¿Olvidaste tu contraseña?</a><br><br>
        <button type="submit" class="btn btn-success">Crear cuenta</button>
        </form>

    </div>




@endsection