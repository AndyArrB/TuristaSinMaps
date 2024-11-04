<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavegacionController;

Route::get('/', [NavegacionController::class, 'inicio'])->name('inicio');
Route::post('/registro', [NavegacionController::class, 'registro'])->name('registro');
Route::post('/inicio-sesion', [NavegacionController::class, 'inicio_sesion'])->name('inicio_sesion');
Route::post('/recuperar-contraseña', [NavegacionController::class, 'recuperar_contraseña'])->name('recuperar_contraseña');
Route::post('/nueva-contraseña', [NavegacionController::class, 'recuperar_contraseña2'])->name('recuperar_contraseña2');
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