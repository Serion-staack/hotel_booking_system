<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
  /*  public function index()
    {
      $review=Review::all();
      return view('client.index',compact('review'));
    }*/

    public function storeReview(Request $request, $bookingid)
    {
        $bookings=Bookings::where('id',$bookingid)
            ->where('user_id',auth()->id())
            ->firstOrFail();

        $request->validate([
            'comment'=>'required',
            'rating'=>'required',
        ]);

        $bookings->review()->create([
           'user_id'=>auth()->id(),
           'comment'=>$request->comment,
           'rating'=>$request->rating,
        ]);

        return redirect()->route('index_client')->with('success','Review Added Successfully');
    }

    public function ClientDashboard()
    {
        $user = auth()->user();
        if($user->role->title !== 'Client')
        {
            abort(403, 'Unauthorized action.');
        }
        $bookings=$user->bookings()->with(['room','review'])->latest()->get();
        return view('dashboard.pages.client_dashboard', compact('user', 'bookings'));
    }

    public function create($bookingId)
    {
        $booking = Bookings::where('id', $bookingId)
            ->where('user_id', auth()->id())
            ->with('room')
            ->firstOrFail();

        if ($booking->review) {
            return redirect()->route('index_client')->with('info', 'You have already reviewed this booking.');
        }

        return view('dashboard.pages.create_review', compact('booking'));
    }


}
