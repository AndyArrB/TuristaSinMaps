<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function agregarVuelo(Request $request)
    {
        
        $validacion = $request->validate([
            'numeroVuelo' => 'required|string|max:10',
            'aerolinea' => 'required|string|max:50',
            'origen' => 'required|string|max:50',
            'destino' => 'required|string|max:50',
            'fechaSalida' => 'required|date|after_or_equal:today',
            'fechaLlegada' => 'required|date|after:fechaSalida',
            'precio' => 'required|numeric|min:0',
        ]);

        // Simulación de éxito
        session()->flash('exito', 'Vuelo agregado exitosamente.');
    }
}
