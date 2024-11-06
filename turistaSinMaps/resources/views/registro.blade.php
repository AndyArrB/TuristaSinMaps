@extends('layout.plantillaCliente')
@section('contenido_registro')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        @session('exito')
             <script>Swal.fire({
            title: "Registro exitoso",
            text: "{{$value}}",
            icon: "success"
            });</script> 
        @endsession
        <h1>Registro</h1><br>
        <form action="/procesarRegistro" method="POST">
            @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
            <small>{{ $errors->first('txtnombre') }}</small>
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="txtapellido" value="{{old('txtapellido')}}">
            <small>{{ $errors->first('txtapellido') }}</small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
            <small>{{ $errors->first('txtemail') }}</small>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}">
            <small>{{ $errors->first('txttelefono') }}</small>
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Crear una contraseña</label>
            <input type="text" class="form-control" name="txtcontraseña" value="{{ old('txtcontraseña') }}">
            <small>{{ $errors->first('txtcontraseña') }}</small>
        </div>
        <button type="submit" class="btn btn-success">Crear cuenta</button>
        </form>

    </div>




@endsection