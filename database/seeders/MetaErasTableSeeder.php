<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaErasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_eras";
        $field ="era";
        $data = array(
            array($field => "Pre-historic"),
            array($field => "Ancient"),
            array($field => "Classical"),
            array($field => "Post-Classical"),
            array($field => "Middle Ages"),
            array($field => "Modern"),
            array($field => "Renaissance"),
            array($field => "World War One"),
            array($field => "World War Two"),
            array($field => "Civil War"),
            array($field => "Revolutionary War"),
            array($field => "Industrial"),
            array($field => "Atomic Age"),
            array($field => "Space Age"),
            array($field => "12th Century"),
            array($field => "13th Century"),
            array($field => "14th Century"),
            array($field => "15th Century"),
            array($field => "16th Century"),
            array($field => "17th Century"),
            array($field => "18th Century"),
            array($field => "19th Century"),
            array($field => "20th Century"),
            array($field => "21th Century"),
            array($field => "22nd Century"),
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
