<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     $permissions = array(
      array(
       "name" => "create", 
       "description" => "create permissions for resources", 
       "sentinel" => "CREATE"
     ),
      array(
       "name" => "read", 
       "description" => "read permissions for resources", 
       "sentinel" => "READ"
     ),
      array(
       "name" => "update", 
       "description" => "update permissions for resources", 
       "sentinel" => "UPDATE"
     ),
      array(
       "name" => "delete", 
       "description" => "delete permissions for resources", 
       "sentinel" => "DELETE"
     ),
    );

     for ($i = 0; $i < count($permissions); $i++) {
       \DB::table('auth_permissions')->insert([
         'name' => $permissions[$i]['name'],
         'description' => $permissions[$i]['description'],
         'sentinel' => $permissions[$i]['sentinel'],
         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
     }
   }
 }
