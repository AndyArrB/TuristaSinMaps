@extends('layout.plantillaAdmin')

@section('contenido_adminHoteles')

<div class="container mt-4">
    <h2 class="mb-4">Administración de Hoteles</h2>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Simulador de búsqueda --}}
    <form class="d-flex mb-4" action="#" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar hotel" aria-label="Buscar">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>

    {{-- Nuevo hotel --}}
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarHotelModal">
        Agregar Nuevo Hotel
    </button>

    {{-- Modal para agregar nuevo hotel --}}
    <div class="modal fade" id="agregarHotelModal" tabindex="-1" aria-labelledby="agregarHotelModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarHotelModalLabel">Agregar Nuevo Hotel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Nuevo Hotel -->
                    <form method="POST" action="/agregarHotel">
                        @csrf
                        <div class="mb-3">
                            <label for="nombreHotel" class="form-label">Nombre del Hotel</label>
                            <input type="text" class="form-control" id="nombreHotel" name="nombreHotel" placeholder="Ej. Hotel Paradise">
                        </div>
                        <div class="mb-3">
                            <label for="lugar" class="form-label">Lugar</label>
                            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Ej. Cancún, México">
                        </div>
                        <div class="mb-3">
                            <label for="precioNoche" class="form-label">Precio por Noche</label>
                            <input type="number" class="form-control" id="precioNoche" name="precioNoche" placeholder="Ej. 150.00">
                        </div>
                        <div class="mb-3">
                            <label for="habitacionesDisponibles" class="form-label">Habitaciones Disponibles</label>
                            <input type="number" class="form-control" id="habitacionesDisponibles" name="habitacionesDisponibles" placeholder="Ej. 20">
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

    {{-- Tabla y datos dummies --}}
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre del Hotel</th>
                    <th>Lugar</th>
                    <th>Precio por Noche</th>
                    <th>Habitaciones Disponibles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hotel Paradise</td>
                    <td>Cancún, México</td>
                    <td>$150.00</td>
                    <td>20</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Grand Luxor</td>
                    <td>Dubai, EAU</td>
                    <td>$500.00</td>
                    <td>15</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Green Valley Resort</td>
                    <td>Kyoto, Japón</td>
                    <td>$200.00</td>
                    <td>10</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Mountain Lodge</td>
                    <td>Suiza</td>
                    <td>$250.00</td>
                    <td>5</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Beachfront Inn</td>
                    <td>Maldivas</td>
                    <td>$300.00</td>
                    <td>8</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este hotel?')">Eliminar</button>
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
