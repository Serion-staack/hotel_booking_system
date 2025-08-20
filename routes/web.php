<?php

use App\Events\NotifyProcessed;
use App\Events\StatusLiked;
use App\Http\Controllers\CallController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SmsTestController;
use App\Http\Controllers\StripeController;
//use App\Http\Controllers\TwilioWebhookController;
use App\Http\Controllers\TermsController;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',function ()
{
    return view('form');
});

Route::get('/send-notify',function ()
{
    event(new NotifyProcessed(request()->all()));
    return view('welcome');
})->name('send-notify');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::updateOrCreate([
        'email' => $googleUser->getEmail(),
    ], [
        'name' => $googleUser->getName(),
        'password' => bcrypt(Str::random(16)),
    ]);

    Auth::login($user);

    return redirect('/dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
     Route::get('/telescope',[BookingsController::class,'index'])->name('bookings.index');
    //Users
    Route::get('/dashboard/users', [DashboardController::class, 'users'])->name('users');
    Route::delete('/dashboard/users/{email}', [DashboardController::class, 'deleteUser'])->name('users.delete');
    Route::get('/dashboard/users/{id}/edit', [DashboardController::class, 'editUser'])->name('users.edit');
    Route::put('/dashboard/users/{id}', [DashboardController::class, 'updateUser'])->name('users.update');
    Route::get('/dashboard/users/profile', [DashboardController::class, 'profileUser'])->name('users.profile');
    Route::delete('/dashboard/users/{id}/delete-image', [DashboardController::class, 'deleteUserImage'])->name('user.image.delete');

   /* //Client

    Route::get('/dashboard/client', [ReviewController::class, 'ClientDashboard'])->name('index_client');
    Route::post('/dashboard/client/store', [ReviewController::class, 'storeReview'])->name('client_store');
    Route::get('/dashboard/client/create/{booking}', [ReviewController::class, 'create'])->name('reviews.create');





    //Bookings
    Route::get('/bookings',[BookingsController::class,'index'])->name('index.bookings');
    Route::get('/bookings/show/{id}',[BookingsController::class,'show'])->name('show.bookings');
    Route::get('/bookings/create',[BookingsController::class,'create'])->name('create.bookings');
    Route::post('/bookings/store',[BookingsController::class,'store'])->name('bookings.store');
    Route::put('/bookings/update/{id}', [BookingsController::class, 'update'])->name('update.bookings');
    Route::delete('/bookings/destroy/{id}',[BookingsController::class,'destroy'])->name('destroy.bookings');
    Route::get('/bookings/edit/{id}',[BookingsController::class,'edit'])->name('edit.bookings');
    //Route::get('/rooms/availability', [RoomController::class, 'availabilityView'])->name('rooms.availability');


    //Rooms
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms/store', [RoomController::class, 'store'])->name('rooms.store');
    Route::put('/rooms/update/{id}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/destroy/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
    Route::get('/rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::get('/rooms/show/{id}', [RoomController::class, 'show'])->name('rooms.show');

    Route::get('/hotels/index', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');
    Route::post('/hotels/store', [HotelController::class, 'store'])->name('hotels.store');

    Route::get('/calendar',[BookingsController::class,'calendar'])->name('booking.calendar');

    Route::get('/bookings/export',[BookingsController::class,'export'])->name('bookings.export');

    Route::get('/rooms/export',[RoomController::class,'export'])->name('rooms.export');

    Route::post('/bookings/import', [BookingsController::class, 'import'])->name('bookings.import');

    Route::get('/test-sms', [SmsTestController::class, 'SmsTest']);
   Route::post('/reservation/store', [BookingsController::class, 'store'])->name('create.reservation');*/

    /*Route::post('/twilio/answer', function(Request $request) {
        $response = new \SimpleXMLElement('<Response></Response>');
        $response->say('Hello! This is your Laravel app calling you.');
        return response($response->asXML(), 200)->header('Content-Type', 'text/xml');
    })->name('twilio.answer');*/


    /*  Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
      Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
      Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');*/

   /* Route::get('/test',function()
    {
        //event(new App\Events\StatusLiked('status-liked'));
        event(new StatusLiked('JohnDoe'));
        return 'Event has been sent';
    });*/




});

Route::get('/test', function () {
    Debugbar::info('Debugbar it works!');
    return view('welcome');
});

Route::get('/make-call', [CallController::class, 'call'])->name('twilio.call');
//Route::post('/twilio/voice', [CallController::class, 'voiceResponse'])->name('twilio.voice');
//Route::post('/twilio/ivr', [CallController::class, 'ivr'])->name('twilio.ivr');
//Route::post('/twilio/handle-input', [CallController::class, 'handleInput'])->name('twilio.handle_input');

//Route::post('/twilio/call-status', [TwilioWebhookController::class, 'status'])->name('twilio.call_status');


Route::get('/stripe',[StripeController::class,'show'])->name('stripe.form');
Route::post('/stripe',[StripeController::class,'processPayment'])->name('stripe.store');

Route::get('/available',[RoomController::class,'available'])->name('available.index');
Route::get('/checklist-passat', function () {
    $data = [
        'title' => 'Checklist – VW Passat 2.0 TDI (2012–2013)',
        'sections' => [
            [
                'heading' => '1. 🔍 Documentation & History',
                'items' => [
                    "Is the service book complete?",
                    "Invoices for previous services?",
                    "Is the chassis number (VIN) the same on documents and body?",
                    "Checked with the police for fines or legal restrictions?"
                ]
            ],
            [
                'heading' => '2. 🧰 Mechanical Condition',
                'items' => [
                    "Easy cold start?",
                    "No white/blue/black smoke during startup?",
                    "No loud knocking or ticking noises?",
                    "No shaking while idling?",
                    "Oil recently changed? (not black or too thick)",
                    "Fuel, air, and cabin filters replaced?",
                    "Timing belt replaced? (with invoice)"
                ]
            ],
            [
                'heading' => '3. ⚙️ Gearbox / Transmission',
                'items' => [
                    "Smooth gear changes? (manual)",
                    "No difficulty engaging any gear?",
                    "Shifts without jerking/delay? (DSG)",
                    "Gearbox oil changed every 60,000 km?"
                ]
            ],
            [
                'heading' => '4. 💨 DPF & EGR',
                'items' => [
                    "No “check engine” light on?",
                    "No power loss when going uphill?",
                    "DPF/EGR cleaned or replaced?"
                ]
            ],
            [
                'heading' => '5. 🚗 Test Drive (on the road)',
                'items' => [
                    "Stable steering without pulling to the sides?",
                    "Brakes do not shake or lock?",
                    "No suspension noises (especially over bumps)?",
                    "Turbo responds well with consistent pull?"
                ]
            ],
            [
                'heading' => '6. 🧱 Bodywork and Interior',
                'items' => [
                    "No parts with mismatched color?",
                    "No rust on sills, wheels, or trunk door?",
                    "Seats in good condition? (especially SEL leather version)",
                    "AC working (cooling/heating)?",
                    "Multimedia/navigation system functional?"
                ]
            ],
            [
                'heading' => '7. ⚠️ Electronics & Lights',
                'items' => [
                    "All lights functional?",
                    "Electric mirrors and windows working?",
                    "No red/yellow dashboard warning lights?"
                ]
            ],
            [
                'heading' => '8. 🔑 Other',
                'items' => [
                    "Two working keys?",
                    "Spare tire + jack + car tools present?",
                    "Tires in good condition (>3 mm tread)?",
                    "Most recent technical inspection passed?"
                ]
            ],
            [
                'heading' => '📌 Optional but Valuable',
                'items' => [
                    "Verify mileage with carvertical.com or VW services",
                    "Let the car idle for 10–15 minutes — observe temperature and noises",
                    "Pre-purchase check by mechanic (even 20–30€ is worth it)"
                ]
            ]
        ]
    ];

    $pdf = Pdf::loadView('pdf.checklist_car', $data);
    return $pdf->download('Checklist_Passat_TDI_2012_2013.pdf');
});

Route::get('/bookings/new',[BookingsController::class,'newthing'])->name('new');

Route::middleware(['auth'])->group(function () {
        //Client

        Route::get('/dashboard/client', [ReviewController::class, 'ClientDashboard'])->name('index_client');
        Route::post('/dashboard/client/store', [ReviewController::class, 'storeReview'])->name('client_store');
        Route::get('/dashboard/client/create/{booking}', [ReviewController::class, 'create'])->name('reviews.create');



        //Bookings
        Route::get('/bookings',[BookingsController::class,'index'])->name('index.bookings');
        Route::get('/bookings/show/{id}',[BookingsController::class,'show'])->name('show.bookings');
        Route::get('/bookings/create',[BookingsController::class,'create'])->name('create.bookings');
        Route::post('/bookings/store',[BookingsController::class,'store'])->name('bookings.store');
        Route::put('/bookings/update/{id}', [BookingsController::class, 'update'])->name('update.bookings');
        Route::delete('/bookings/destroy/{id}',[BookingsController::class,'destroy'])->name('destroy.bookings');
        Route::get('/bookings/edit/{id}',[BookingsController::class,'edit'])->name('edit.bookings');
        //Route::get('/rooms/availability', [RoomController::class, 'availabilityView'])->name('rooms.availability');

        //Rooms
        Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
        Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('/rooms/store', [RoomController::class, 'store'])->name('rooms.store');
        Route::put('/rooms/update/{id}', [RoomController::class, 'update'])->name('rooms.update');
        Route::delete('/rooms/destroy/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        Route::get('/rooms/edit/{id}', [RoomController::class, 'edit'])->name('rooms.edit');
        Route::get('/rooms/show/{id}', [RoomController::class, 'show'])->name('rooms.show');

        Route::get('/hotels/index', [HotelController::class, 'index'])->name('hotels.index');
        Route::get('/hotels/create', [HotelController::class, 'create'])->name('hotels.create');
        Route::post('/hotels/store', [HotelController::class, 'store'])->name('hotels.store');

        Route::get('/calendar',[BookingsController::class,'calendar'])->name('booking.calendar');

        Route::get('/bookings/export',[BookingsController::class,'export'])->name('bookings.export');

        Route::get('/rooms/export',[RoomController::class,'export'])->name('rooms.export');

        Route::post('/bookings/import', [BookingsController::class, 'import'])->name('bookings.import');

        Route::get('/test-sms', [SmsTestController::class, 'SmsTest']);
        Route::post('/reservation/store', [BookingsController::class, 'store'])->name('create.reservation');
    });


require __DIR__.'/auth.php';





