@extends('layout.plantillaCliente')

@section('contenido_inicio')

@vite(['resources/css/stylem.css'])
<link rel="stylesheet" href="{{ asset('css/styleperfilc.css') }}">

<div class="container mt-5">
    <div class="bg-primary text-white p-2 rounded">
        Hola: 
    </div>

    <div class="row">
    @if(session('exito'))
        <x-Alert tipo="success">{{ session('exito') }}</x-Alert>

        @endif
        @session('exito')
        <x-Alert tipo="warning">{{ $value }}</x-Alert>
        @endsession

        @session('exito')
       {! <script>
            Swal.fire({
                title: 'Los datos se actualizaron',
                text: "Se guardo el'{{ session('exito') }}'",
                icon: "success"
            });
        </script>!}
        @endsession
    
   
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white text-center">
                    Información Personal
                </div>

                <div class="card-body">
                    <form action="/enviarperfil" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="txtnombre" value="">
                            <small>{{ $errors->first('txtnombre') }}</small>
                            <button type="submit" class="btn btn-warning mt-2">Editar</button>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="txtcorreo" value="">
                            <small>{{ $errors->first('txtcorreo') }}</small>
                            <button type="submit" class="btn btn-warning mt-2">Editar</button>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" name="txttelefono" value="">
                            <small>{{ $errors->first('txttelefono') }}</small>
                            <button type="submit" class="btn btn-warning mt-2">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Reservaciones -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Reservaciones</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Vuelo</th>
                                <th>Fechas</th>
                                <th>Asientos</th>
                                <th>Nombre Hotel</th>
                                <th>Noches</th>
                                <th>Hora de Compra</th>
                                <th>Precio Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>MX1234</td>
            <td>Del 15/12/2023 al 20/12/2023</td>
            <td>2</td>
            <td>Hotel Paraíso del Caribe</td>
            <td>5</td>
            <td>10:30 AM</td>
            <td>$1,500 USD</td>
                            </tr>
                            <tr>
                            <td>LH2345</td>
            <td>Del 10/02/2024 al 15/02/2024</td>
            <td>1</td>
            <td>Central Park Inn</td>
            <td>5</td>
            <td>11:00 AM</td>
            <td>$1,200 USD</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('reservaciones') }}" class="btn btn-link">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
