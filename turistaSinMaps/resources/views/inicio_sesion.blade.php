@extends('layout.plantillaCliente')

@section('contenido_inicio_sesion')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        @if(session('exito'))
            <script>Swal.fire({
            title: "Registro exitoso",
            text: "{{ session('exito') }}",
            icon: "success"
            });</script> 
        @endsession
        <h1>Bienvenido</h1><br>
        <form action="{{ route('enviarinicio_sesion') }}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" required name="txtemail" value="{{ old('txtemail') }}">
            <small>{{ $errors->first('txtemail') }}</small>
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="text" class="form-control" required name="txtcontraseña" value="{{ old('txtcontraseña') }}" >
            <small>{{ $errors->first('txtcontraseña') }}</small>
        </div>
        <a href="{{route('recuperar_contraseña')}}">¿Olvidaste tu contraseña?</a><br><br>
        <button type="submit" class="btn btn-success">Crear cuenta</button>
        </form>

    </div>




@endsection