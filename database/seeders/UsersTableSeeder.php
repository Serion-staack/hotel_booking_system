<?php

namespace Database\Seeders;

use App\Enums\AdminEnum;
use App\Enums\UserRolesEnum;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'Developer',
            'last_name'  => 'Developer',
            'email'      => 'developer@developer.com',
            'role_id'    => 1, //1->admin
            'user_type'  => AdminEnum::ADMIN,
            'password'   => Hash::make('password@@'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Client',
            'last_name'  => 'Client',
            'email'      => 'client@cleint.com',
            'role_id'    => 2, //2->CLIENT
            'user_type'    => UserRolesEnum::CLIENT,
            'password'   => Hash::make('password@@@@'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Manager',
            'last_name'  => 'Manager',
            'email'      => 'manager@manager.com',
            'role_id'    => 3, //3->Manager
            'user_type'    => UserRolesEnum::MANAGER,
            'password'   => Hash::make('password@@_@@'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Receptionist',
            'last_name'  => 'Receptionist',
            'email'      => 'receptionist@receptionist.com',
            'role_id'    => 4, //4->Receptionist
            'user_type'    => UserRolesEnum::RECEPTIONIST,
            'password'   => Hash::make('password@@%@@'),
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);


    }
}
