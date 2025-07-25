<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hotel::create([
            'name' => 'Hotel Adriatik',
            'latitude' => 41.2969,
            'longitude' => 19.5102,
            'city' => 'Durres',
            'description' => 'Hotel luksoz buze detit.',
            'phone' => '0691234567',
        ]);

        Hotel::create([
            'name' => 'Hotel Vollga',
            'latitude' => 41.3235,
            'longitude' => 19.4448,
            'city' => 'Durrs',
            'description' => 'Hotel afer shetitores.',
            'phone' => '0697654321',
        ]);
    }
}
