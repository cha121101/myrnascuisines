<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class acceptReservationEventMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $mailContent ,
    $body , 
    $subject, 
    $fullname , 
    $address, 
    $email, 
    $phonenumber,
    $venue, 
    $venueprice, 
    $package, 
    $packageprice, 
    $additionalguest, 
    $scheduledate, 
    $scheduletime ;

    public function __construct($mailContent)
    {   
        // $this->$mailContent =  $mailContent;
        $this->body =  $mailContent['body'];
        $this->subject = $mailContent['subject'];
        $this->fullname = $mailContent['fullname'];
        $this->address = $mailContent['address'];
        $this->email = $mailContent['email'];
        $this->phonenumber = $mailContent['phonenumber'];
        $this->additionalguest = $mailContent['additionalguest'];
        $this->venue = $mailContent['venue'];
        $this->venueprice = $mailContent['venueprice'];
        $this->package = $mailContent['package'];
        $this->packageprice = $mailContent['packageprice'];
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
            view: 'mail.reservation.accept.event',
            with:[
                'body' =>   $this->body,
                'fullname' => $this->fullname,
                "address" => $this->address,
                "email" =>  $this->email,
                "phonenumber" => $this->phonenumber,
                "additionalguest" => $this->additionalguest,
                "venue" =>$this->venue,
                "venueprice" =>$this->venueprice,
                "package" =>$this->package,
                "packageprice" =>$this->packageprice,
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
