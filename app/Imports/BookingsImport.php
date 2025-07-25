<?php

namespace App\Imports;

use App\Models\Bookings;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;


class BookingsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bookings([
            'user_id' => Auth::id() ?? 1,
            'room_id' => $row[1],
        ]);
    }
}
