<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaFranchisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_franchises";
        $field ="franchise";
        $data = array(
            array($field => "Norman Rockwell"),
            array($field => "John Deere"),
            array($field => "McDonalds"),
            array($field => "Budweiser"),
            array($field => "Three Stooges"),
            array($field => "Starwars"),
            array($field => "Wizar of Oz"),
            array($field => "Winnie the Pooh"),
            array($field => "Barbie"),
            array($field => "Harley-Davidson"),
            array($field => "Alice in Wonderland"),
            array($field => "World Wrestling Federation"),
            array($field => "Disney"),
            array($field => "Disneyland"),
            array($field => "Sound of Music"),
            array($field => "Betty Boop"),
            array($field => "The Beatles"),
            array($field => "Star Trek"),
            array($field => "Aladdin"),
            array($field => "Looney Toons"),
            array($field => "Harry Potter"),
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
