<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistro;

class Registro extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function procesarRegistro(validadorRegistro $peticion){
        //return redirect('/');

        $usuario = $peticion->input('txtnombre');
        session()->flash('exito', 'El usuario de '.$usuario.' registrado exitosamente.');

        return to_route('registro');


    }
}
