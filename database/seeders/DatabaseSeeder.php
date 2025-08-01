<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User']
        );*/


        $this->call([
            RoomsTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            HotelTableSeeder::class,
        ]);
    }
}
