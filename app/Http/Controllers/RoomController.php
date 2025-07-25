<?php

namespace App\Http\Controllers;

use App\Exports\RoomsExport;
use App\Models\Room;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('rooms.create');
    }

    public function show($id)
    {
        $room=Room::with('images')->findOrFail($id);
        return view('rooms.show', compact('room'));
    }


    public function edit($id)
    {
        $room=Room::findOrFail($id);
        return view('rooms.edit', compact('room'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required|unique:rooms,room_number',
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'type' => 'required',
            'amenities' => 'nullable|string',
            'floor' => 'nullable|integer',
            'status' => 'required|string',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $room = Room::create($validated);


        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('rooms', 'public');
                $room->images()->create(['image_path' => $path]);
            }
        }


        return redirect()->route('rooms.index')->with('success', 'Dhoma u shtua me sukses.');
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);

        $validated = $request->validate([
            'room_number' => 'required|unique:rooms,room_number,' . $room->id,
            'capacity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'type' => 'required',
            'amenities' => 'nullable|string',
            'floor' => 'nullable|integer',
            'status' => 'required|string',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $room->update($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('rooms', 'public');
                $room->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('rooms.index')->with('success', sprintf('Dhoma me numer: %s u perditesua me sukses!', $room->room_number));
    }
    public function destroy($id)
    {
        $room=Room::findOrFail($id);
        $room->delete();

        return redirect()->route('rooms.index')->with('success', 'Dhoma u fshi me sukses!');
    }

    public function export()
    {
        return Excel::download(new RoomsExport,'rooms.xlsx');
    }
}
