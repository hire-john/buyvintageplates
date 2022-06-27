<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlateCollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(base_path("data/plate_seed_data/series.csv"), "r");
        while($data = fgetcsv($file, null, ",")){
            \DB::table('plate_collections')->insert([
             'collection' => $data[0],
             'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ]);
        }
    }
}
