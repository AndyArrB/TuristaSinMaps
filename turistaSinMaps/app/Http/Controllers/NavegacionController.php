<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegacionController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function registro(){
        return view('registro');
    }
    public function inicio_sesion(){
        return view('inicio_sesion');
    }
    public function recuperar_contraseña(){
        return view('recuperar_contraseña');
    }
    public function recuperar_contraseña2(){
        return view('recuperar_contraseña2');
    }
    public function recuperar_contraseña3(){
        return view('recuperar_contraseña3');
    }
    public function perfil_cliente(){
        return view('perfil_cliente');
    }
    public function vuelos(){
        return view('vuelos');
    }
    public function hoteles(){
        return view('hoteles');
    }
    public function detalle_hotel(){
        return view('detalle_hotel');
    }
    public function carrito(){
        return view('carrito');
    }
    public function confirmacion_reserva(){
        return view('confirmacion_reserva');
    }
    public function reservaciones(){
        return view('reservaciones');
    }
    public function panel_admin(){
        return view('panel_admin');
    }
    public function admin_vuelos(){
        return view('admin_vuelos');
    }
    public function admin_hoteles(){
        return view('admin_hoteles');
    }
    public function admin_usuarios(){
        return view('admin_usuarios');
    }
}
