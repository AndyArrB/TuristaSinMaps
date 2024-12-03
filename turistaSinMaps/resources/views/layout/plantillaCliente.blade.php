@extends('layout.navbarCliente')

@section('contenido')

    @yield('contenido_inicio')
    @yield('contenido_registro')
    @yield('contenido_inicio_sesion')
    @yield('contenido_vuelos')
    @yield('contenido_hoteles')
    @yield('contenido_reservaciones')
    @yield('contenido_recuperar_contraseña')
    @yield('contenido_recuperar_contraseña2')
    @yield('contenido_recuperar_contraseña3')
    @yield('contenido_carrito')
    @yield('contenido_detalle_hotel')
    @yield('contenido_perfil')
    @yield('busquedaHoteles')
@endsection

