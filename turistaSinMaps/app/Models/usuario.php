<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Cambia esta línea
use Illuminate\Notifications\Notifiable; // Añade este trait si quieres usar notificaciones

class Usuario extends Authenticatable // Hereda de Authenticatable
{
    use Notifiable; // Opcional, pero útil

    protected $table = 'usuarios';
    
    protected $fillable = [
        'nombre', 
        'apellido', 
        'email', 
        'telefono', 
        'password', 
        'verification_token',
        'email_verified_at'
    ];

    protected $hidden = [
        'password',
        'verification_token'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'email_verified_at'
    ];

    // Método para generar token de verificación
    public function generateVerificationToken()
    {
        $this->verification_token = \Illuminate\Support\Str::random(60);
        $this->save();
    }

    // Método para marcar email como verificado
    public function markEmailAsVerified()
    {
        $this->email_verified_at = now();
        $this->verification_token = null;
        $this->save();
    }
}