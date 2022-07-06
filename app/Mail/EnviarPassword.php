<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarPassword extends Mailable
{
    use Queueable, SerializesModels;
    public $title;
    public $content;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $content, $subject)
    {
        $this->title = $title;
        $this->content = $content;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.SendPass')->subject($this->subject)->from('lazarojuarez.pa@gmail.com');
    }
}
