<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaBrandsTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $table ="meta_brands";
        $field ="brand";
        $data = array(
            array($field => "Royal Doulton"),
            array($field => "Gorham"),
            array($field => "Edwin M. Knowles"),
            array($field => "Lenox"),
            array($field => "Bing & Grondahl"),
            array($field => "Haviland"),
            array($field => "Bareuther"),
            array($field => "Goebel"),
            array($field => "Heinrich"),
            array($field => "Kaiser"),
            array($field => "Rosenthal"),
            array($field => "Belleek"),
            array($field => "Thomas Kinkade"),
            array($field => "Bradford Exhange"),
            array($field => "Danbury Mint"),
            array($field => "Royal Copahagen"),
            array($field => "Royal Worcester"),
            array($field => "W.S George"),
            array($field => "Candian Dominion"),
            array($field => "Hamilton Colletion"),
            array($field => "Franklin Mint"),
            array($field => "Reco International"),
            array($field => "Wedgewood"),
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