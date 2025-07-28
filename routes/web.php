<?php

use App\Events\NotifyProcessed;
use App\Events\StatusLiked;
use App\Http\Controllers\CallController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SmsTestController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TwilioWebhookController;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\RoomController;



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

Route::get('/checklist-passat', function () {
    $data = [
        'title' => 'Checklist – VW Passat 2.0 TDI (2012–2013)',
        'sections' => [
            [
                'heading' => '1. 🔍 Dokumentacioni & Historia',
                'items' => [
                    "Libreza e servisit e plotësuar?",
                    "Faturat e shërbimeve të mëparshme?",
                    "Numri i shasisë (VIN) i njëjtë në dokumente dhe trup?",
                    "Kontroll tek DPS për gjoba apo pengesa ligjore?"
                ]
            ],
            [
                'heading' => '2. 🧰 Gjendja Mekanike',
                'items' => [
                    "Ndezje e lehtë në të ftohtë?",
                    "Nuk nxjerr tym të bardhë/blu/zi gjatë ndezjes?",
                    "Asnjë zhurmë e fortë ose “tik-tik”?",
                    "Nuk dridhet në punë në bosh (idle)?",
                    "Vaj i ndërruar së fundmi? (jo i zi ose shumë i trashë)",
                    "Filtri i naftës, ajrit dhe kabinës të zëvendësuar?",
                    "Rripi i shpërndarës i ndërruar? (me faturë)"
                ]
            ],
            [
                'heading' => '3. ⚙️ Kutia e marsheve / Transmisioni',
                'items' => [
                    "Ndërrimi i marsheve është i butë? (manual)",
                    "Nuk futet vështirë në ndonjë marsh?",
                    "Ndërrimi pa goditje / vonesë? (DSG)",
                    "Vaji i kambios i ndërruar çdo 60,000 km?"
                ]
            ],
            [
                'heading' => '4. 💨 DPF & EGR',
                'items' => [
                    "Nuk ka dritë “check engine” ndezur?",
                    "Nuk ka humbje fuqie kur ecën në ngjitje?",
                    "Ka bërë pastrim ose zëvendësim të DPF/EGR?"
                ]
            ],
            [
                'heading' => '5. 🚗 Test Drive (provë në rrugë)',
                'items' => [
                    "Drejtimi i qëndrueshëm pa lëvizje anash?",
                    "Frenat nuk dridhen ose bllokohen?",
                    "Asnjë zhurmë nga suspensionet (veçanërisht në gropa)?",
                    "Turbo reagon mirë dhe me tërheqje konstante?"
                ]
            ],
            [
                'heading' => '6. 🧱 Karroceria dhe Brendësia',
                'items' => [
                    "Asnjë pjesë me ngjyrë ndryshe?",
                    "Nuk ka ndryshk në pragje, rrota ose derë bagazhi?",
                    "Sediljet në gjendje të mirë? (sidomos në versionin SEL me lëkurë)",
                    "Klima funksionale (ftohje/ngrohje)?",
                    "Sistemi multimedial / navigacioni punon?"
                ]
            ],
            [
                'heading' => '7. ⚠️ Elektronika & Dritat',
                'items' => [
                    "Të gjitha dritat funksionale?",
                    "Pasqyra elektrike dhe xhamat funksionojnë?",
                    "Dritat e bordit (asnjë simbol i kuq/verdhë ndezur)?"
                ]
            ],
            [
                'heading' => '8. 🔑 Të tjera',
                'items' => [
                    "Dy çelësa funksionalë?",
                    "Gomë rezervë + krik + mjetet e makinës?",
                    "Gomat në gjendje të mirë (>3 mm profil)?",
                    "Kontrolli teknik i fundit i kaluar?"
                ]
            ],
            [
                'heading' => '📌 Opsionale por të vlefshme',
                'items' => [
                    "Verifiko KM-të me carvertical.com ose servise VW",
                    "Lëre makinën 10-15 minuta ndezur — vështro temperaturën dhe zhurmat",
                    "Kontroll me mekanik para blerjes (edhe për 20–30€ vlen shumë)"
                ]
            ]
        ]
    ];

    $pdf = Pdf::loadView('pdf.checklist_car', $data);
    return $pdf->download('Checklist_Passat_TDI_2012_2013.pdf');
});

require __DIR__.'/auth.php';





