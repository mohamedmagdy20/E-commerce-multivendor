<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VerificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $code ;
    public $email;
    public function __construct($email , $code)
    {
        $this->email = $email;
        $this->code = $code;
    }


    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->markdown('mails.verification')->with(['email',$this->email,'code'=>$this->code]);
    }
       
}
