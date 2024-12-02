@extends('layout.plantillaCliente')

@section('contenido_inicio_sesion')

@vite(['resources/css/stylem.css'])

<div class="container3">
    {{-- Mensajes de error o éxito con SweetAlert --}}
    @if(session('error'))
        <script>
            Swal.fire({
                title: "Error",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif

    @if(session('exito'))
        <script>
            Swal.fire({
                title: "Éxito",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    <h1>Bienvenido</h1><br>
    <form action="{{ route('enviarinicio_sesion') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" required name="txtemail" value="{{ old('txtemail') }}">
            <small class="text-danger">{{ $errors->first('txtemail') }}</small>
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" required name="txtcontraseña" value="{{ old('txtcontraseña') }}">
            <small class="text-danger">{{ $errors->first('txtcontraseña') }}</small>
        </div>
        <a href="{{ route('recuperar_contraseña') }}">¿Olvidaste tu contraseña?</a><br><br>
        <button type="submit" class="btn btn-success">Iniciar sesión</button>
    </form>
</div>

@endsection
