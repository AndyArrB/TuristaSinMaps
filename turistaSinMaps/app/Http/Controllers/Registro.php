<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Usuario;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;
use App\Http\Requests\validadorRegistro;

class Registro extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function perfil_cliente(){
        return view('perfil_cliente');
    }

    public function procesarRegistro(validadorRegistro $peticion)
    {
        $usuario = Usuario::create([
            "nombre" => $peticion->input('txtnombre'),
            "apellido" => $peticion->input('txtapellido'),
            "email" => $peticion->input('txtemail'),
            "telefono" => $peticion->input('txttelefono'),
            "password" => bcrypt($peticion->input('txtcontraseña')),
            "verification_token" => Str::random(60),
            "email_verified_at" => null // por default establece como no verificado
        ]);

        // Enviar correo de verificación
        try {
            Mail::to($usuario->email)->send(new VerificationEmail($usuario));
            
            session()->flash('exito', 'Registro iniciado. Por favor, verifica tu correo electrónico para completar el registro.');
        } catch (\Exception $e) {
            // Si falla el envío de correo, eliminar el usuario
            $usuario->delete();
            return back()->with('error', 'No se pudo enviar el correo de verificación. Intenta nuevamente.');
        }

        return to_route('registro');
    }

    public function inicio_sesion(Request $peticion)
    {
        // Validar campos de entrada
        $credenciales = $peticion->validate([
            'txtemail' => 'required|email',
            'txtcontraseña' => 'required'
        ]);

        // Buscar al usuario por su email
        $usuario = Usuario::where('email', $peticion->input('txtemail'))->first();

        // Verificar si el usuario existe y está verificado
        if (!$usuario) {
            return back()->with('error', 'El usuario no está registrado.');
        }

        if ($usuario->email_verified_at === null) {
            return back()->with('error', 'Por favor, verifica tu correo electrónico antes de iniciar sesión.');
        }

        // Verificar contraseña
        if (!\Hash::check($peticion->input('txtcontraseña'), $usuario->password)) {
            return back()->with('error', 'Correo y/o contraseña incorrecta.');
        }

        // Iniciar sesión manualmente
        auth()->login($usuario);

        // Redirigir al perfil del cliente
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

    public function nueva_contraseña(Request $peticion){

        $validacion = $peticion->validate([
            'txtcontraseña' => 'required|string|min:8',
            'txtconfirmarcontraseña' => 'required|string|same:txtcontraseña'
        ]);


        return to_route('recuperar_contraseña3');
    }

    public function verifyEmail($token)
    {
        $usuario = Usuario::where('verification_token', $token)->first();

        if (!$usuario) {
            return redirect('/registro')->with('error', 'Token de verificación inválido');
        }

        $usuario->markEmailAsVerified();

        return redirect('/inicio-sesion')->with('exito', 'Correo verificado exitosamente. Ahora puedes iniciar sesión.');
    }
}
