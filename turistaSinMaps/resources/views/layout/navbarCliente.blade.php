<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-black">

        <div class="container-fluid">

            <a class="navbar-brand text-light text-uppercase me-5" href="{{ route('inicio') }}">
                {{ __('Turista sin maps') }} </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active me-5">
                        <a class="nav-link text-light" href="{{ route('vuelos') }}"> {{ __('Vuelos') }} </a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-light" href="{{ route('hoteles') }}"> {{ __('Hoteles') }} </a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-light" href="{{ route('reservaciones') }}"> {{ __('Reservaciones') }}
                        </a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-light" href="{{ route('reservaciones') }}"> {{ __('Carrito') }}
                        </a>
                    </li>

                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Perfil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('registro') }}">Registrarse</a></li>
                            <li><a class="dropdown-item" href="{{ route('inicio_sesion') }}">Iniciar sesión</a></li>
                            <li><a class="dropdown-item" href="{{ route('panel_admin') }}">Administración</a></li>
                            <li><a class="dropdown-item" href="{{ route('perfil_cliente') }}">Perfil</a></li>
                        </ul>
            </div>

        </div>


    </nav>
<<<<<<< HEAD

=======

    <div class="container mt-4">
        
        @yield('contenido')
    
    </div>

>>>>>>> 7be1a240fb759f52d7c1d4536921ae6f523bf590
    

</body>

</html>
