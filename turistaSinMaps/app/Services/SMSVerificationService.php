<?php
namespace App\Services;

use Twilio\Rest\Client;
use App\Models\PhoneVerificationCode;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SMSVerificationService
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(
            config('services.twilio.account_sid'), 
            config('services.twilio.auth_token')
        );
    }

    public function enviarCodigoVerificacion($telefono)
    {
        // Generar código de 6 dígitos
        $codigo = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        // Eliminar códigos anteriores
        PhoneVerificationCode::where('telefono', $telefono)->delete();

        // Guardar nuevo código
        PhoneVerificationCode::create([
            'telefono' => $telefono,
            'codigo' => $codigo,
            'expires_at' => now()->addMinutes(15)
        ]);

        // Enviar SMS
        $this->twilio->messages->create(
            $telefono,
            [
                'from' => config('services.twilio.phone_number'),
                'body' => "Tu código de verificación es: $codigo"
            ]
        );

        return true;
    }

    public function verificarCodigo($telefono, $codigo)
    {
        $verificacion = PhoneVerificationCode::where('telefono', $telefono)
            ->where('codigo', $codigo)
            ->where('expires_at', '>', now())
            ->first();

        return $verificacion !== null;
    }
}