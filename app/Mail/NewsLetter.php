<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsLetter extends Mailable
{
    use Queueable, SerializesModels;

    public $newsLetterSubs;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($newsLetterSubs)
    {
        $this->newsLetterSubs = $newsLetterSubs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('NewsLetter Subscription')->view('emails.newsletter');
    }
}
