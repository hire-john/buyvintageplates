<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaDecorStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_decor_styles";
        $field ="decor_style";
        $data = array(
            array($field => "American Directoire"),
            array($field => "Colonial"),
            array($field => "Decorative"),
            array($field => "Noir/Film Noir"),
            array($field => "Rustic"),
            array($field => "Minimalist"),
            array($field => "Contemporary"),
            array($field => "Traditional"),
            array($field => "French Country"),
            array($field => "American Country"),
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
