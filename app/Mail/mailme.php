<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailme extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'saquib.rizwan@cloudways.com';
 
        $name = 'Saquib Rizwan';
     
        $subject = 'Laravel Email';
     
        return $this->view('emails.mailme')
     
        ->from($address, $name)
     
        ->subject($subject);
    }
}
