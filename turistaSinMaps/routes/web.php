<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavegacionController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\Registro;

Route::get('/', [NavegacionController::class, 'inicio'])->name('inicio');
Route::get('/registro', [NavegacionController::class, 'registro'])->name('registro');
Route::get('/inicio-sesion', [NavegacionController::class, 'inicio_sesion'])->name('inicio_sesion');
Route::get('/recuperar-contraseña', [NavegacionController::class, 'recuperar_contraseña'])->name('recuperar_contraseña');
//Route::get('/nueva-contraseña', [NavegacionController::class, 'recuperar_contraseña2'])->name('recuperar_contraseña2');
Route::get('/nueva-contraseña', [NavegacionController::class, 'recuperar_contraseña2'])->name('recuperar_contraseña2');
Route::get('/confirmacion-contraseña', [NavegacionController::class, 'recuperar_contraseña3'])->name('recuperar_contraseña3');
Route::get('/perfil', [NavegacionController::class, 'perfil_cliente'])->name('perfil_cliente');
Route::get('/vuelos', [NavegacionController::class, 'vuelos'])->name('vuelos');
Route::get('/hoteles', [NavegacionController::class, 'hoteles'])->name('hoteles');
Route::get('/detalles-hotel', [NavegacionController::class, 'detalle_hotel'])->name('detalle_hotel');
Route::get('/carrito', [NavegacionController::class, 'carrito'])->name('carrito');
Route::post('/confirmacion-reserva', [NavegacionController::class, 'confirmacion_reserva'])->name('confirmacion_reserva');
Route::get('/reservaciones', [NavegacionController::class, 'reservaciones'])->name('reservaciones');
Route::get('/panel-admin', [NavegacionController::class, 'panel_admin'])->name('panel_admin');
Route::get('/admin-vuelos', [NavegacionController::class, 'admin_vuelos'])->name('admin_vuelos');
Route::get('/admin-hoteles', [NavegacionController::class, 'admin_hoteles'])->name('admin_hoteles');
Route::get('/admin-usuarios', [NavegacionController::class, 'admin_usuarios'])->name('admin_usuarios');

//POST
Route::post('/enviarperfil', [NavegacionController::class, 'procesarperfil'])->name('enviarperfil');
Route::post('/procesarRegistro', [Registro::class, 'procesarregistro'])->name('enviarregistro');
Route::post('/inicio_sesion', [Registro::class, 'inicio_sesion'])->name('enviarinicio_sesion');
Route::post('/recuperarcontraseña', [Registro::class, 'recuperar_contraseña'])->name('enviarrecuperar_contraseña');
Route::post('/nuevacontraseña', [Registro::class, 'nueva_contraseña'])->name('enviarnueva_contraseña');


//Emails
Route::get('/verify-email/{token}', [Registro::class, 'verifyEmail'])->name('verify.email');