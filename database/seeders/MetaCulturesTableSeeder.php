<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaCulturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_cultures";
        $field ="culture";
        $data = array(
            array($field => "American"),
            array($field => "Chinese"),
            array($field => "Japanese"),
            array($field => "Korean"),
            array($field => "Hawaiian"),
            array($field => "German"),
            array($field => "Danish"),
            array($field => "African"),
            array($field => "African-American"),
            array($field => "Italian"),
            array($field => "Native American"),
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

