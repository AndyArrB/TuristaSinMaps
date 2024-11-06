@extends('layout.plantillaCliente')

@section('contenido_recuperar_contraseña')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        <h1>Recuperar Contraseña</h1><br>
        <p>Ingresa el correo con el que te registraste.</p><br>
        <form>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="txtemail">
        </div>

        <a href="#">¿Olvidaste tu contraseña?</a><br><br>
        <button type="submit" class="btn btn-success">Crear cuenta</button>
        </form>

    </div>




@endsection