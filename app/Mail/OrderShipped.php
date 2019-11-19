<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Mensaje recibido';
    public $msg; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->msg = $datos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //no se utiliza
        return $this->markdown('vendor.mail.html.varios');
    }
}
