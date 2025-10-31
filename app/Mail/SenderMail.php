<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SenderMail extends Mailable
{
    use Queueable, SerializesModels;
    public $demo;
    /**
     * Create a new message instance.
     */
    public function __construct($demo)
    {
        $this->demo = $demo;
    }

    public function build()
    {
        return $this->
        from('info@dovod_it.ru')->
        view('mails.demo')->
        subject('Запрос с сайта Dovod_IT')->
        text('mails.demo_plain');
    }
}
