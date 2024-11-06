@extends('layout.plantillaAdmin')

@section('contenido_adminVuelos')

<div class="container mt-4">
    <h2 class="mb-4">Administración de Vuelos</h2>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{--     Simulador de busqueda --}}
    <form class="d-flex mb-4" action="#" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar vuelo" aria-label="Buscar">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>

   {{--  Nuevo vuelo --}}
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarVueloModal">
        Agregar Nuevo Vuelo
    </button>

    {{-- Modal para simular agregar nuevo vuelo --}}
    <div class="modal fade" id="agregarVueloModal" tabindex="-1" aria-labelledby="agregarVueloModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarVueloModalLabel">Agregar Nuevo Vuelo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Nuevo Vuelo -->
                    <form method="POST" action="/agregarVuelo">
                        @csrf
                        <div class="mb-3">
                            <label for="numeroVuelo" class="form-label">Número de Vuelo</label>
                            <input type="text" class="form-control" id="numeroVuelo" placeholder="Ej. AV123">
                        </div>
                        <div class="mb-3">
                            <label for="aerolinea" class="form-label">Aerolínea</label>
                            <input type="text" class="form-control" id="aerolinea" placeholder="Ej. Avianca">
                        </div>
                        <div class="mb-3">
                            <label for="origen" class="form-label">Origen</label>
                            <input type="text" class="form-control" id="origen" placeholder="Ej. Bogotá">
                        </div>
                        <div class="mb-3">
                            <label for="destino" class="form-label">Destino</label>
                            <input type="text" class="form-control" id="destino" placeholder="Ej. Ciudad de México">
                        </div>
                        <div class="mb-3">
                            <label for="fechaSalida" class="form-label">Fecha de Salida</label>
                            <input type="datetime-local" class="form-control" id="fechaSalida">
                        </div>
                        <div class="mb-3">
                            <label for="fechaLlegada" class="form-label">Fecha de Llegada</label>
                            <input type="datetime-local" class="form-control" id="fechaLlegada">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" placeholder="Ej. 450.00">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </div>


 {{--    Tabla y datos dummies --}}
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Número de Vuelo</th>
                    <th>Aerolínea</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha de Salida</th>
                    <th>Fecha de Llegada</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>AV123</td>
                    <td>Avianca</td>
                    <td>Bogotá</td>
                    <td>Ciudad de México</td>
                    <td>2024-12-01 08:30</td>
                    <td>2024-12-01 12:45</td>
                    <td>$450.00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vuelo?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>AM456</td>
                    <td>Aeroméxico</td>
                    <td>Ciudad de México</td>
                    <td>Los Ángeles</td>
                    <td>2024-12-05 10:00</td>
                    <td>2024-12-05 14:30</td>
                    <td>$550.00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vuelo?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>UA789</td>
                    <td>United Airlines</td>
                    <td>Chicago</td>
                    <td>Miami</td>
                    <td>2024-12-10 16:00</td>
                    <td>2024-12-10 19:30</td>
                    <td>$300.00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vuelo?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>IB321</td>
                    <td>Iberia</td>
                    <td>Madrid</td>
                    <td>Buenos Aires</td>
                    <td>2024-12-15 20:00</td>
                    <td>2024-12-16 06:00</td>
                    <td>$900.00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vuelo?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>LH654</td>
                    <td>Lufthansa</td>
                    <td>Frankfurt</td>
                    <td>Tokio</td>
                    <td>2024-12-20 13:45</td>
                    <td>2024-12-21 08:30</td>
                    <td>$1200.00</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este vuelo?')">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    @if(session('exito'))
    <script>
        Swal.fire({
            title: '¡Éxito!',
            text: '{{ session("exito") }}',
            icon: 'success',
            confirmButtonText: 'Aceptar'
        });
    </script>
@endif

@endsection