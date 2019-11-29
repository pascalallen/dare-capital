<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewLead extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * New contact.
     *
     * @var array
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@darebizcapital.com')
            ->view('emails.leads.new')
            ->with([
                'contact' => $this->contact,
            ]);
    }
}
