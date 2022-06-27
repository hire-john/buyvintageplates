<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaYearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $starting_year = 1400;
        $ending_year = 2400;
        while($starting_year < $ending_year){
           \DB::table('meta_years')->insert([
               'year' => $starting_year,
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
           ]);
           $starting_year++;
       }
   }
}