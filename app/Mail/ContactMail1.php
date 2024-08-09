<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    
     public function build()
    {
        return $this->view('emails.contact')->with('data', $this->data)->subject('Nuevo mensaje de cotización');
    }
}

class ContactMailBolsa extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('emails.contactBolsa')->with('data', $this->data)->subject('Nuevo mensaje de Residencia');
    }

}
