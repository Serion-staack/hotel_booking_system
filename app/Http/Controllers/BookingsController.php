<?php

namespace App\Http\Controllers;

use App\Events\BookingCreated;
use App\Exports\BookingExport;
use App\Imports\BookingsImport;
use App\Models\Bookings;
use App\Models\Room;
use App\Services\CallService;
use App\Services\SmsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;



class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function newthing()
    {
        return view('bookings.newthing');
    }
    public function index()
    {
        $bookings = Bookings::all();
        return view('dashboard.pages.bookings', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $rooms = Room::where('is_active',true)->get() ;

        $selectedRoomId=$request->room_id;

        return view('bookings.create',compact('rooms','selectedRoomId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, SmsService $smsService)
    {
        Log::info('Store function started');

        $request->validate([
            'room_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'customer_name' => 'required|string',
            'customer_mail' => 'required|email',
        ]);

        Log::info('Validation passed', ['request_data' => $request->all()]);

        $conflict = Bookings::where('room_id', $request->room_id)
            ->where('status', 'booked')
            ->where('start_date', '<=', $request->end_date)
            ->where('end_date', '>=', $request->start_date)
            ->exists();

        if ($conflict) {
            Log::warning('Booking conflict found for room', ['room_id' => $request->room_id]);
            return back()->with("error", "Booking already exists!");
        }

        $booking = Bookings::create([
            'customer_name' => $request->customer_name,
            'customer_mail' => $request->customer_mail,
            'room_id' => $request->room_id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'booked',
            'user_id' => auth()->id() ?? 1
        ]);

        Log::info('Booking created', ['booking_id' => $booking->id]);

        $message = "Hello {$booking->customer_name}, your booking is confirmed {$booking->start_date}.";
        Log::info('Sending SMS', ['to' => '+355683265019', 'message' => $message]);

        try {
            $smsService->sendSms('+355683265019', $message);
            Log::info('SMS sent successfully');
        } catch (\Exception $e) {
            Log::error('SMS sending failed: ' . $e->getMessage());
        }

        event(new BookingCreated($booking));

        Log::info('Store function finished successfully');

        return redirect()->route('index.bookings')->with("success", "Booking added successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $booking=Bookings::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking=Bookings::findOrFail($id);
        $rooms=Room::all() ;

         return view('bookings.edit',compact('booking','rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'room_id'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'
        ]);

        $conflict = Bookings::where('room_id', $request->room_id)
            -> where('id','!=',$id)
            ->where('start_date','<=',$request->end_date)
            ->where('end_date','>=',$request->start_date)
            ->exists();
        if($conflict)
        {
            return back()->with("error", "Booking already exists!");
        }
         $booking=Bookings::findOrFail($id);
         $booking->update([
            'room_id'=>$request->room_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
        ]);

        return redirect()->route('index.bookings')->with("success", "Booking updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking=Bookings::findorFail($id);
        $booking->status='canceled';
        $booking->save();
        return back()->with("success", "Booking deleted successfully!");
    }

    public function calendar()
    {
        $bookings = Bookings::with('room')->get();

        $events = $bookings->map(function ($booking) {
            return [
                'title' => $booking->room->name ?? 'Rezervim',
                'start' => $booking->start_date,
                'end' => date('Y-m-d', strtotime($booking->end_date . ' +1 day')),
                'color' => $booking->status === 'booked' ? 'green' : 'gray',
            ];
        });
        return view('bookings.calendar', [
            'events' => $events
        ]);
    }

    public function export()
    {
        return Excel::download(new BookingExport, 'bookings.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv,xls',
        ]);

        Excel::import(new BookingsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Bookings imported successfully!');
    }

    public function callMyNumber(CallService $callService)
    {
        $myNumber = env('MY_PERSONAL_NUMBER');
        $callService->makeCall($myNumber);

        return back()->with('success', 'Call initiated to your personal number!');
    }


}
