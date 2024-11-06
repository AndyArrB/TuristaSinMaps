@extends('layout.plantillaCliente')

@section('contenido_inicio')

<link rel="stylesheet" href="{{ asset('css/styleperfilc.css') }}">

<div class="container mt-5">
    <div class="bg-primary text-white p-2 rounded">
        Hola: 
    </div>

    <div class="row">
   
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white text-center">
                    Información Personal
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="txtnombre" value="">
                            <button type="button" class="btn btn-warning mt-2">Editar</button>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Email:</label>
                            <input type="text" class="form-control" name="txtcorreo" value="">
                            <button type="button" class="btn btn-warning mt-2">Editar</button>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono:</label>
                            <input type="text" class="form-control" name="txttelefono" value="">
                            <button type="button" class="btn btn-warning mt-2">Editar</button>
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
                                <td>idk</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-link">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
