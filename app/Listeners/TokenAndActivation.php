<?php


namespace App\Listeners;

use App\Events\Registeration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\UserVerify; 
class TokenAndActivation
{
    public $user;
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
$verifyUser = new UserVerify(); 
$verifyUser->cms_users_id = $event->user->id; 
$verifyUser->token = str_random(50);
$verifyUser->save(); 


    }
}
