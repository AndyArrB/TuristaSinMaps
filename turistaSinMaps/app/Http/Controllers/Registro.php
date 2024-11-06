<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistro;

class Registro extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function perfil_cliente(){
        return view('perfil_cliente');
    }

    public function procesarRegistro(validadorRegistro $peticion){
        //return redirect('/');

        $usuario = $peticion->input('txtnombre');
        session()->flash('exito', 'El usuario de '.$usuario.' registrado exitosamente.');

        return to_route('registro');


    }

    public function inicio_sesion(validadorRegistro $peticion){
        //$usuario = $peticion->input('txtnombre');
        session()->flash('exito');

        return to_route('perfil_cliente');
        
    }

    public function recuperar_contraseña(Request $peticion){

        $validacion = $peticion->validate([
            'txtemail' => 'required|email'
        ]);

        $usuario = $peticion->input('txtemail');
        session()->flash('exito','Correo enviado!');

        return to_route('recuperar_contraseña');

    }   
}
