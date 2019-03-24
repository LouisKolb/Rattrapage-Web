<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Http\Controllers\PagesController;
use Auth;

class email extends Mailable
{
    use Queueable, SerializesModels;


    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->build();
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */

        public function build()
    {
        
        return $this->from('notif_site@BDE_Strasbourg.com')
                    ->view('emails.order')
                    ->with('user',$this->user);
    }
                    
}
