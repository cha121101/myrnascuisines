<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class acceptReservationTableMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $mailContent ,$body , $subject, $fullname , $address, $email, $phonenumber, $table, $scheduledate, $scheduletime;

    public function __construct($mailContent)
    {   
        // $this->$mailContent =  $mailContent;
        $this->body =  $mailContent['body'];
        $this->subject = $mailContent['subject'];
        $this->fullname = $mailContent['fullname'];
        $this->address = $mailContent['address'];
        $this->email = $mailContent['email'];
        $this->table = $mailContent['tablenumber'];
        $this->phonenumber = $mailContent['phonenumber'];
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
            view: 'mail.reservation.accept.table',
            with:[
                'body' =>   $this->body,
                'fullname' => $this->fullname,
                "address" => $this->address,
                "email" =>  $this->email,
                "phonenumber" => '+63' . $this->phonenumber,
                "table" =>  $this->table,
                "scheduledate" =>  $this->scheduledate,
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
