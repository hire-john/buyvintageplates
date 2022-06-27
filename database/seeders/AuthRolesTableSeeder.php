<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            array(
                "name" => "developer", 
                "description" => "Role for platform developers. These roles are superusers and may display development information such as debugging and additional lower-level details.", 
                "sentinel" => "DEV", 
                "auth_level" => 0
            ),
            array(
                "name" => "administrator", 
                "description" => "Role for platform administrators. These roles are superusers inregards to permission capabilites and can essentially perform any function on the platform.", 
                "sentinel" => "ADMIN", 
                "auth_level" => 1
            ),
            array(
                "name" => "manager", 
                "description" => "Role for platform managers. These roles are section-specific superusers. They have unlimited capabilites in their dedicated managerial duties.", 
                "sentinel" => "DEV", 
                "auth_level" => 2
            ),
            array(
                "name" => "user", 
                "description" => "Role for platform users. These roles restrict the users to the capabilites of a regular platform user. They can't cross the scope of other users and are limited to their account.", 
                "sentinel" => "DEV", 
                "auth_level" => 3
            ),
            array(
                "name" => "trial", 
                "description" => "Role for platform trial user accounts. These roles are very limited and can perform some functions. The aim of trial roles is a conversion to a regular user in paid applications.", 
                "sentinel" => "DEV", 
                "auth_level" => 4
            )
        );

        for ($i = 0; $i < count($roles); $i++) {
            \DB::table('auth_roles')->insert([
                'name' => $roles[$i]['name'],
                'description' => $roles[$i]['description'],
                'sentinel' => $roles[$i]['sentinel'],
                'auth_level' => $roles[$i]['auth_level'],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}