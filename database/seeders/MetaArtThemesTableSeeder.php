<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaArtThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_art_themes";
        $field ="art_theme";
        $data = array(
            array($field => "Dogs"),
            array($field => "Cats"),
            array($field => "Farming"),
            array($field => "Wildlife"),
            array($field => "Ducks"),
            array($field => "Bears"),
            array($field => "Birds"),
            array($field => "Religion"),
            array($field => "Military"),
            array($field => "Athletics"),
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
