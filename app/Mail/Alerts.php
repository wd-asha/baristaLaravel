<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Alerts extends Mailable
{
    use Queueable, SerializesModels;

    protected $body;
    protected $total;
    protected $orderid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($body, $total, $orderid)
    {
        $this->body = $body;
        $this->total = $total;
        $this->orderid = $orderid;
    }

    public function build()
    {
        return $this->subject('Message from the site Barista')->view('mail.alerts', ['body' => $this->body, 'total' => $this->total, 'orderid' => $this->orderid]);
    }
}
