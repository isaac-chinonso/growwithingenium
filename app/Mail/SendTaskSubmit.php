<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendTaskSubmit extends Mailable
{
    use Queueable, SerializesModels;
    public $lessontask;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lessontask)
    {
        $this->lessontask = $lessontask;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'no_reply@growwithingenium.com';
        $name = 'Ingenium Concept';
        $subject = 'New Task Submission';
        return $this->view('email.TaskSubmit')
            ->from($address, $name)
            ->cc($address, $name)
            ->bcc($address, $name)
            ->replyTo($address, $name)
            ->subject($subject);
    }
}
