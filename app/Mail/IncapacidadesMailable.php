<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;

class IncapacidadesMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Informacion de incapacidad";

    public $incapacidad; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($incapacidad)
    {
        $this->incapacidad = $incapacidad;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.incapacidades');
    }
}
