@extends('layout.plantillaAdmin')

@section('contenido_adminUsuarios')

<div class="container mt-4">
    <h2 class="mb-4">Administración de Usuarios</h2>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Simulador de busqueda --}}
    <form class="d-flex mb-4" action="#" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar usuario" aria-label="Buscar">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </form>

    {{-- Nuevo Usuario --}}
    <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#agregarUsuarioModal">
        Agregar Nuevo Usuario
    </button>

    {{-- Modal para agregar nuevo usuario --}}
    <div class="modal fade" id="agregarUsuarioModal" tabindex="-1" aria-labelledby="agregarUsuarioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarUsuarioModalLabel">Agregar Nuevo Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Nuevo Usuario -->
                    <form method="POST" action="/agregarUsuario">
                        @csrf
                        <div class="mb-3">
                            <label for="nombreUsuario" class="form-label">Nombre del Usuario</label>
                            <input type="text" class="form-control" id="nombreUsuario" placeholder="Ej. Juan Pérez">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Ej. juan@hotel.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="********">
                        </div>
                        <div class="mb-3">
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-select" id="rol">
                                <option value="1">Administrador</option>
                                <option value="2">Recepcionista</option>
                                <option value="3">Camarista</option>
                                <option value="4">Gerente</option>
                            </select>
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

    {{-- Tabla de Usuarios --}}
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan Pérez</td>
                    <td>juan@hotel.com</td>
                    <td>Administrador</td>
                    <td>Activo</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María López</td>
                    <td>maria@hotel.com</td>
                    <td>Recepcionista</td>
                    <td>Activo</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Pedro Díaz</td>
                    <td>pedro@hotel.com</td>
                    <td>Camarista</td>
                    <td>Inactivo</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Ana Gómez</td>
                    <td>ana@hotel.com</td>
                    <td>Gerente</td>
                    <td>Activo</td>
                    <td>
                        <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">Eliminar</button>
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
