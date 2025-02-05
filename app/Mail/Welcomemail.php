<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Welcomemail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $subject;
    public $type;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $type = 'admin')
    {
        $this->data = $data;
        $this->type = $type;
    }

    public function build()
    {
        $view = $this->type === 'admin' ? 'frontend.mail' : 'frontend.thankyou';
        $subject = $this->type === 'admin'
            ? 'New Contact Us Submission'
            : 'Thank You for Contacting Us!';

        return $this->subject($subject)
            ->view($view)
            ->with('data', $this->data);
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $view = $this->type === 'admin' ? 'frontend.mail' : 'frontend.thankyou';

        return new Content(
            view: $view,
            with: [
                'data' => $this->data,
                'subject' => $this->type === 'admin'
                    ? 'New Contact Us Submission'
                    : 'Thank You for Contacting Us!'
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
