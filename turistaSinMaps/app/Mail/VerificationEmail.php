<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Usuario;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $verificationUrl;

    /**
     * Create a new message instance.
     */
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
        $this->verificationUrl = route('verify.email', [
            'token' => $usuario->verification_token
        ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Verifica tu correo electrónico',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.verification',
            with: [
                'userName' => $this->usuario->nombre,
                'verificationUrl' => $this->verificationUrl
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments(): array
    {
        return [];
    }
}