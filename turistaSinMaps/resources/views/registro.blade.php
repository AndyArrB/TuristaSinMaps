@extends('layout.plantillaCliente')
@section('contenido_registro')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        <h1>Registro</h1><br>
        <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="txtnombre">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="txtapellido">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="txtemail">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="txttelefono">
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Crear una contraseña</label>
            <input type="text" class="form-control" id="txtcontraseña">
        </div>
        <button type="submit" class="btn btn-success">Crear cuenta</button>
        </form>

    </div>




@endsection