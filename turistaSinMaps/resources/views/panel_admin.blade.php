@extends('layout.plantillaAdmin')

@section('contenido_panel')
@vite(['resources/css/stylemfondo.css'])

    <div class="container mt-5">
        <h2 class="mb-4">Panel de Administración</h2>
        <div class="row">
            <div class="col-md-4">
                <x-card header="Gestión de Vuelos" title="Administrar Vuelos"
                    text="Agregar, editar y eliminar información sobre vuelos disponibles." btnText="Ir a Gestión de Vuelos"
                    btnLink="{{ route('admin_vuelos') }}" bgColor="primary" />
            </div>

            <div class="col-md-4">
                <x-card header="Gestión de Hoteles" title="Administrar Hoteles"
                    text="Gestiona los detalles de hoteles y la disponibilidad de habitaciones."
                    btnText="Ir a Gestión de Hoteles" btnLink="{{ route('admin_hoteles') }}" bgColor="success" />
            </div>

            <div class="col-md-4">
                <x-card header="Gestión de Usuarios" title="Administrar Usuarios"
                    text="Visualizar y gestionar los datos de los usuarios registrados." btnText="Ir a Gestión de Usuarios"
                    btnLink="{{ route('admin_usuarios') }}" bgColor="warning" />
            </div>

        </div>
    </div>

@endsection
