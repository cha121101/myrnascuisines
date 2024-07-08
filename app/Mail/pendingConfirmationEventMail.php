<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class pendingConfirmationEventMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $mailContent ,$body , $subject, $fullname, $submittime , $address, $email, $phonenumber,$venue , $package, $additionalguest , $scheduledate, $scheduletime ;

    public function __construct($mailContent)
    {   
        // $this->$mailContent =  $mailContent;
        $this->body =  $mailContent['body'];
        $this->subject = $mailContent['subject'];
        $this->fullname = $mailContent['fullname'];
        // $this->address = $mailContent['address'];
        // $this->email = $mailContent['email'];
        // $this->phonenumber = $mailContent['phonenumber'];
        // $this->venue = $mailContent['venue'];
        // $this->package = $mailContent['package'];
        $this->submittime = $mailContent['submittime'];
        $this->scheduledate = $mailContent['scheduledate'];
        $this->scheduletime = $mailContent['scheduletime'];

        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.pending.event',
            with:[
                'body' =>   $this->body,
                'fullname' => $this->fullname,
                // "address" => $this->address,
                // "email" =>  $this->email,
                // "phonenumber" =>  '+63'. $this->phonenumber,
                // "additionalguest" => $this->additionalguest,
                // "venue" =>$this->venue,
                // "package" =>$this->package,
                "submittime" =>  $this->submittime,
                "scheduledate" =>  $this->scheduledate,
                "scheduletime" =>  $this->scheduletime
            ]
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


