<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaOccasionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_occasions";
        $field ="occasion";
        $data = array(
            array($field => "Christmas"),
            array($field => "Mothersday"),
            array($field => "Fathersday"),
            array($field => "Birthday"),
            array($field => "Halloween"),
            array($field => "Surprise"),
            array($field => "New Years"),
            array($field => "Hannukah"),
            array($field => "Kwanza"),
            array($field => "Ramadan"),
            array($field => "Thanksgiving"),
            array($field => "Fourth of July"),
            array($field => "Anniversay"),
            array($field => "Unknown"),
            array($field => "None"),

        );

        for ($i = 0; $i < count($data); $i++) {
            \DB::table($table)->insert([
                $field => $data[$i][$field],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}
