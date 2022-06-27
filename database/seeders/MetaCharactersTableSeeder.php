<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaCharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table ="meta_characters";
        $field ="character";
        $data = array(
            array($field => "Norman Rockwell"),
            array($field => "John Deere"),
            array($field => "Hamburglar"),
            array($field => "Ronald McDonald"),
            array($field => "Larry"),
            array($field => "Curly"),
            array($field => "Moe"),
            array($field => "Winnie the Pooh"),
            array($field => "Barbie"),
            array($field => "Darth Vader"),
            array($field => "Alice"),
            array($field => "World Wrestling Federation"),
            array($field => "Walt Disney"),
            array($field => "Mickey Mouse"),
            array($field => "Sound of Music"),
            array($field => "Betty Boop"),
            array($field => "Aladdin"),
            array($field => "Harry Potter"),
            array($field => "Superman"),
            array($field => "Bugs Bunny"),
            array($field => "Batman"),
            array($field => "James Bond"),
            array($field => "Elvis Presley"),
            array($field => "The Tramp"),
            array($field => "Peter Pan"),
            array($field => "Indiana Jones"),
            array($field => "Rocky Balboa"),
            array($field => "Han Solo"),
            array($field => "Vito Corleone"),
            array($field => "Homer Simpson"),
            array($field => "Jesus"),
            array($field => "Lucy Ricardo"),
            array($field => "King Kong"),
            array($field => "Spiderman"),
            array($field => "Archie Bunker"),
            array($field => "Mickey Mantle"),
            array($field => "Babe Ruth"),
            array($field => "Godzilla"),
            array($field => "Spock"),
            array($field => "The Joker"),
            array($field => "Popeye"),
            array($field => "Tarzan"),
            array($field => "Forrest Gump"),
            array($field => "Hannibal Lector"),
            array($field => "Big Bird"),
            array($field => "Tony Soprano"),
            array($field => "Tony Montana"),
            array($field => "The Terminator"),
            array($field => "Norman Bates"),
            array($field => "Charlie Brown"),
            array($field => "Jay Gatsby"),
            array($field => "E.T."),
            array($field => "Fred Flintstone"),
            array($field => "Rooster Cogburn"),
            array($field => "The Pope"),
            array($field => "Yoda"),
            array($field => "Mary Poppins"),
            array($field => "Atticus Finch"),
            array($field => "The Hulk"),
            array($field => "Scooby Doo"),
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
