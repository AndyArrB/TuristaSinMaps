@extends('layout.plantillaX')

@section('contenido_recuperar_contraseña')

@vite(['resources/css/stylem.css'])



    <div class="container3">
        @session('exito')
            <script>Swal.fire({
            title: "Correo enviado",
            text: "{{ session('exito') }}",
            icon: "success"
            });</script> 
        @endsession

        <h1>Recuperar Contraseña</h1><br>
        <p>Ingresa el correo con el que te registraste.</p><br>
        <form action="{{ route('enviarrecuperar_contraseña') }}" method="POST">
            @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail') }}">
            <small>{{ $errors->first('txtemail') }}</small>
        </div>

        <button type="submit" class="btn btn-success">Recuperar</button>
        </form>

    </div>




@endsection