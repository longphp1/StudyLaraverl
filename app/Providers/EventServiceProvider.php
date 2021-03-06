<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        'App\Events\PupUserchange'=>[
            'App\Handlers\Events\UserManagerd'
        ],
        'App\Events\OrderShipped'=>[
            'App\Listeners\SendShipmentNotification',
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
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

        Event::listen('shopping', function ($foo, $bar) {
            //
        });
        Event::listen('event.*', function ($eventName, array $data) {
            //
        });
        //
    }
}
