<?php

namespace App\Providers;

use App\Events\BookingCreated;
use App\Listeners\SendBookingConfirmation;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    protected $listen = [
        BookingCreated::class => [
            SendBookingConfirmation::class,
        ],
    ];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
