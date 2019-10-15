<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje recibido';
    public $msg; //se declara la variable como publica para que este disponible en la vista

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        //Recibe la informacion guardada en la variable del Controlador
        $this->msg = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-received');
    }
}
