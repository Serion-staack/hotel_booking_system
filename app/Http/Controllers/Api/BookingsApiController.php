<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bookings;
use Illuminate\Http\Request;
//use OpenApi\Annotations as OA;

class BookingsApiController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/bookings",
     *     summary="List all bookings",
     *     tags={"Bookings"},
     *     @OA\Response(response=200, description="List of bookings")
     * )
     */
    public function index()
    {
        return response()->json(Bookings::all());
    }

    /**
     * @OA\Post(
     *     path="/api/bookings",
     *     summary="Create a new booking",
     *     tags={"Bookings"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"room_id", "start_date", "end_date", "customer_name", "customer_mail"},
     *             @OA\Property(property="room_id", type="integer", example=1),
     *             @OA\Property(property="start_date", type="string", format="date", example="2025-07-15"),
     *             @OA\Property(property="end_date", type="string", format="date", example="2025-07-20"),
     *             @OA\Property(property="customer_name", type="string", example="John Doe"),
     *             @OA\Property(property="customer_mail", type="string", example="john@example.com")
     *         )
     *     ),
     *     @OA\Response(response=201, description="Booking created successfully"),
     *     @OA\Response(response=400, description="Invalid input")
     * )
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_id' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'customer_name' => 'required|string',
            'customer_mail' => 'required|email',
        ]);

        $booking = Bookings::create($validated);

        return response()->json($booking, 201);
    }
}
