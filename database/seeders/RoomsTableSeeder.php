<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms_array=[

            ['room_number'=>'1',
            'capacity'=> 4 ,
            'description'=>'Adults Room',
            'price'=>5000,
                'type'=>'Single Room',
            ],
            [
                'room_number' => '2',
                'capacity' => 2 ,
                'description' => 'Couple Room',
                'price' => 3500,
                'type'=>'Double Room',
            ]
        ];

        foreach ($rooms_array as $room)
        {
            DB::table('rooms')->insert($room) ;
        }
                /*[
               'room_number'=>$room['room_number'],
               'capacity'=>$room['capacity'],
               'description'=>$room['description'],
               'price'=>$room['price'],
            ]*/

    }
}
