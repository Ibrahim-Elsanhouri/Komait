<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Listeners\TokenAndActivation; 
use App\Listeners\SendActivationMail; 

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',

            
        ],
        'App\Events\Registeration' => [
            'App\Listeners\TokenAndActivation',
            'App\Listeners\SendActivationMail',
            
        ],

    ];
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
