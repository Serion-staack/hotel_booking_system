<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels=Hotel::all(['id','name','latitude','longitude','city','description','phone']);
        return view('hotels.map',compact('hotels'));
    }
    public function create()
    {
        return view('hotels.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'city' => 'required',
            'description' => 'required',
            'phone' => 'required',
        ]);
        Hotel::create($request->all());

        return redirect()->route('hotels.index')->with('success','Hotel created successfully');
    }
}
