<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function bookings()
    {
        $bookings=Bookings::with('room','user')->orderBy('start_date')->get();
        return view('bookings.index',compact('bookings'));
    }

    public function updateStatus(Request $request,$id)
    {
        $booking=Bookings::findOrFail($id);
        $booking->status=$request->status;
        $booking->save();
        return redirect()->route('admin.bookings')->with('success','Booking Status Updated Successfully');
    }
    public function bookingDelete($id)
    {
        Bookings::destroy($id);
        return redirect()->route('admin.bookings')->with('success','Booking Deleted Successfully');
    }
}
