<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DonationCompleted extends Mailable
{
    use Queueable, SerializesModels;

    public $folio, $total;

    public function __construct($folio, $total)
    {
        $this->folio = $folio;
        $this->total = $total;
    }

    public function build()
    {
        return $this->subject('Gracias por su donación')->markdown('mails.DonationCompleted');
    }
}
