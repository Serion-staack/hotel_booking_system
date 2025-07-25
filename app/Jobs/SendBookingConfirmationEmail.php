<?php

namespace App\Jobs;

use App\Listeners\SendBookingConfirmation;
use App\Mail\BookingConfirmation;
use App\Models\Bookings;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendBookingConfirmationEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $booking;
    /**
     * Create a new job instance.
     */
    public function __construct(Bookings $booking)
    {
        $this->booking = $booking;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->booking->customer_mail)->send(new BookingConfirmation($this->booking));
    }
}
