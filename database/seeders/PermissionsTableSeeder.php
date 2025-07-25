<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions_array = [

            //roles
            ['name'=>'View Roles','slug'   => 'roles.view_any','description' => 'Check if this user can view roles list'],
            ['name'=>'Create Roles','slug' => 'roles.store','description' => 'Check if this user can store a new role'],
            ['name'=>'Update Roles','slug' => 'roles.update','description' => 'Check if this user can update a role'],
            ['name'=>'Delete Roles','slug' => 'roles.delete','description' => 'Check if this user can update roles'] ,
            ['name'=>'Manage Role Permissions','slug' => 'roles.manage_permissions','description' => 'Check if this user manage permissions for a role'] ,

            //permissions
            ['name'=>'View Permissions','slug'     => 'permissions.view_any','description' => 'Check if this user can view permissions list'],
            ['name'=>'Create Permissions','slug'   => 'permissions.store','description'    => 'Check if this user can create new permission'],

            //impersonation
//            ['name'=>'Can Impersonate','slug'     => 'impersonation.can_impersonate','description' => 'Check if this user can impersonate users'],
//            ['name'=>'Can Be Impersonated ','slug'   => 'impersonation.can_be_impersonated','description'    => 'Check if this user can be impersonated'],

            //general
            ['name'=>'View Login History','slug'   => 'general.view_login_history','description' => 'Check if this user can view login history list'],
            ['name'=>'View Activity Log','slug'    => 'general.view_activity_log','description' => 'Check if this user can view activity log list'],
            ['name'=>'View Forbidden Log','slug'   => 'general.view_forbidden_log','description' => 'Check if this user can view forbidden log list'],
            ['name'=>'View Dashboard','slug'       => 'general.dashboard','description' => 'Check if this user can view dashboard'],

            //users
            ['name'=>'View Users','slug'   => 'users.view_any','description' => 'Check if this user can view users list'],
            ['name'=>'Create Users','slug' => 'users.store','description' => 'Check if this user can store a new user'],
            ['name'=>'Update Users','slug' => 'users.update','description' => 'Check if this user can update a user'],
            ['name'=>'Delete Users','slug' => 'users.delete','description' => 'Check if this user can update users'] ,
        ];

        /*foreach ($permissions_array as $permission){
            DB::table('permissions')->updateOrInsert([
                'name'        => $permission['name'],
                'slug'        => $permission['slug'],
                'description' => $permission['description'],
                'created_at'  => Carbon::now()->toDateTimeString(),
                'updated_at'  => Carbon::now()->toDateTimeString(),
            ]);
        }*/

        foreach ($permissions_array as $permission){
            DB::table('permissions')->updateOrInsert(
                ['name' => $permission['name']],
                [
                    'slug'        => $permission['slug'],
                    'description' => $permission['description'],
                    'created_at'  => Carbon::now()->toDateTimeString(),
                    'updated_at'  => Carbon::now()->toDateTimeString(),
                ]
            );
        }
    }
}
