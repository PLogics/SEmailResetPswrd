<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\PasswordReset;
use App\Listeners\SendPasswordReset;
use function Illuminate\Events\queueable;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        'App\Events\PasswordReset'=>[
            'App\Listeners\SendPasswordReset'
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //


        // Event::listen(function (PasswordReset $event) {
        //     //
        // });

        // Event::listen(queueable(function (PasswordReset $event) {
        //     //

        // }));

        // Event::listen(queueable(function (PasswordReset $event) {
        //     //
        // })->onConnection('redis')->onQueue('podcasts')->delay(now()->addSeconds(10)));
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
