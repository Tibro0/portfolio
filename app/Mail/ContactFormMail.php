<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailName;
    public $mailEmail;
    public $mailSubject;
    public $mailMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($mailName, $mailEmail, $mailSubject, $mailMessage)
    {
        $this->mailName = $mailName;
        $this->mailEmail = $mailEmail;
        $this->mailSubject = $mailSubject;
        $this->mailMessage = $mailMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'You have been a message from Portfolio',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.portfolio',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
