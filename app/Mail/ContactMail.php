<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name, $email, $subj, $msg;
    public function __construct($name, $email, $subj, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subj = $subj;
        $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contacto Página DUAAM')
                ->markdown('mails.ContactMail');
    }
}
