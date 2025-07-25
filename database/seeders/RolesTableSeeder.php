<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //Admin
        $adminRoleId = DB::table('roles')->where('title', 'Admin')->value('id');
        if (!$adminRoleId) {
            $adminRoleId = DB::table('roles')->insertGetId([
                'title' => 'Admin',
                'description' => 'Admin',
                'notes' => 'Admin Role',
                'text_color' => '#ffffff',
                'background_color' => '#eb3446',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        $permissions = DB::table('permissions')->get();

        foreach ($permissions as $permission) {
            DB::table('permission_role')->updateOrInsert([
                'permission_id' => $permission->id,
                'role_id' => $adminRoleId,
            ], [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }



        //Client
        $clientRoleId = DB::table('roles')->where('title', 'Client')->value('id');
        if (!$clientRoleId) {
            $clientRoleId = DB::table('roles')->insertGetId([
                'title' => 'Client',
                'description' => 'Client',
                'notes' => 'Client Role',
                'text_color' => '#ffffff',
                'background_color' => '#eb3446',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        foreach ($permissions as $permission) {
            DB::table('permission_role')->updateOrInsert([
                'permission_id' => $permission->id,
                'role_id' => $clientRoleId,
            ], [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        //Manager

        $managerRoleId = DB::table('roles')->where('title', 'Manager')->value('id');
        if (!$managerRoleId) {
            $managerRoleId = DB::table('roles')->insertGetId([
                'title' => 'Manager',
                'description' => 'Manager',
                'notes' => 'Manager Role',
                'text_color' => '#ffffff',
                'background_color' => '#eb3446',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        foreach ($permissions as $permission) {
            DB::table('permission_role')->updateOrInsert([
                'permission_id' => $permission->id,
                'role_id' => $managerRoleId,
            ], [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        //Receptionist

        $receptionistRoleId = DB::table('roles')->where('title', 'Receptionist')->value('id');
        if (!$receptionistRoleId) {
            $receptionistRoleId = DB::table('roles')->insertGetId([
                'title' => 'Receptionist',
                'description' => 'Receptionist',
                'notes' => 'Receptionist Role',
                'text_color' => '#ffffff',
                'background_color' => '#eb3446',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }

        foreach ($permissions as $permission) {
            DB::table('permission_role')->updateOrInsert([
                'permission_id' => $permission->id,
                'role_id' => $receptionistRoleId,
            ], [
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}

    /*public function run(): void
    {
        DB::table('roles')->insert([
            'title'             => 'Admin',
            'description'       => 'Admin',
            'notes'             => 'Admin Role',
            'text_color'        => '#ffffff',
            'background_color'  => '#eb3446',
            'created_at'        => Carbon::now()->toDateTimeString(),
            'updated_at'        => Carbon::now()->toDateTimeString(),
        ]);


        $permissions = DB::table('permissions')->get();

        foreach ($permissions as $permission){

            DB::table('permission_role')->insert([
                'permission_id'    => $permission->id,
                'role_id'          => 1,
                'created_at'       => Carbon::now()->toDateTimeString(),
                'updated_at'       => Carbon::now()->toDateTimeString(),
            ]);
        }


        DB::table('roles')->insert([
            'title'             => 'Client',
            'description'       => 'Client',
            'notes'             => 'Client Role',
            'text_color'        => '#ffffff',
            'background_color'  => '#eb3446',
            'created_at'        => Carbon::now()->toDateTimeString(),
            'updated_at'        => Carbon::now()->toDateTimeString(),
        ]);


        $permissions = DB::table('permissions')->get();

        foreach ($permissions as $permission){

            DB::table('permission_role')->insert([
                'permission_id'    => $permission->id,
                'role_id'          => 2,
                'created_at'       => Carbon::now()->toDateTimeString(),
                'updated_at'       => Carbon::now()->toDateTimeString(),
            ]);
        }



        DB::table('roles')->insert([
            'title'             => 'Manager',
            'description'       => 'Manager',
            'notes'             => 'Manager Role',
            'text_color'        => '#ffffff',
            'background_color'  => '#eb3446',
            'created_at'        => Carbon::now()->toDateTimeString(),
            'updated_at'        => Carbon::now()->toDateTimeString(),
        ]);


        $permissions = DB::table('permissions')->get();

        foreach ($permissions as $permission){

            DB::table('permission_role')->insert([
                'permission_id'    => $permission->id,
                'role_id'          => 3,
                'created_at'       => Carbon::now()->toDateTimeString(),
                'updated_at'       => Carbon::now()->toDateTimeString(),
            ]);
        }



        DB::table('roles')->insert([
            'title'             => 'Receptionist',
            'description'       => 'Receptionist',
            'notes'             => 'Receptionist Role',
            'text_color'        => '#ffffff',
            'background_color'  => '#eb3446',
            'created_at'        => Carbon::now()->toDateTimeString(),
            'updated_at'        => Carbon::now()->toDateTimeString(),
        ]);


        $permissions = DB::table('permissions')->get();

        foreach ($permissions as $permission){

            DB::table('permission_role')->insert([
                'permission_id'    => $permission->id,
                'role_id'          => 4,
                'created_at'       => Carbon::now()->toDateTimeString(),
                'updated_at'       => Carbon::now()->toDateTimeString(),
            ]);
        }




    }*/




