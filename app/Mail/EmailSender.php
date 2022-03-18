<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSender extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $data; // Données pour la vue

    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // "allialinogues@gmail.com"
        // return $this->view('view.name');
        return $this->from("{{config('app.name')}}") // L'expéditeur
                    ->subject("Message via le SMTP Google") // Le sujet
                    ->view('/Emails.EmailSender'); // La vue
    }
    
}
