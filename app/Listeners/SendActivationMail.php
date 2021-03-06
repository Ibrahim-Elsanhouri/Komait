<?php


namespace App\Listeners;

use App\Events\Registeration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\VerificationMail; 

class SendActivationMail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registeration  $event
     * @return void
     */
    public function handle(Registeration $event)
    {
        //
        \Mail::to($event->user->email)->send(new \App\Mail\VerificationMail($event->user));
    }
}
