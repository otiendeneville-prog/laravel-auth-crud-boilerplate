<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Queue\SerializesModels;

class OrderedShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(protected idea $idea)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ordered Shipped',
            from: new \Illuminate\Mail\Mailables\Address('Neuville@gamil.com','Neuville Shop'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.ordered-shipped',
            

        );
    }

    public function toMail (object $notifilable): MailMessage
    {
        $url =url('/ideas/' .$this->idea->id);
        return (new MailMessage)
       ->greeting('Hello')
       ->line('You published a new idea')
       ->action('read it',$url)
       ->line('Thank you for using our action!');
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            
        ];
    }
}
