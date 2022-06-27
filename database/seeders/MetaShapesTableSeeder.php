<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaShapesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_shapes";
        $field ="shape";
        $data = array(
            array($field => "Circle"),
            array($field => "Oval"),
            array($field => "Square"),
            array($field => "Rectangle"),
            array($field => "Triangle"),
            array($field => "Cross"),
            array($field => "Crescent"),
            array($field => "Heart"),
            array($field => "Cylinder"),
            array($field => "Cube"),
            array($field => "Diamond"),
            array($field => "Ring"),
            array($field => "Rhombus"),
            array($field => "Ellipse"),
            array($field => "Tetrahedon"),
            array($field => "Polyhedron"),
            array($field => "Star"),
            array($field => "Hexagon"),
            array($field => "Octagon"),
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
