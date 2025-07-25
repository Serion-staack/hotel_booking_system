<?php

namespace App\Exports;

use App\Models\Bookings;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Bookings::all();
    }
}
