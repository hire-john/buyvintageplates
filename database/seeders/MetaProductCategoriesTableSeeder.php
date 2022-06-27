<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaProductCategoriesTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    $categories = array(
        array(
            "category" => "plates",
            "description" => "new and used general, antique, vintage, rare, and, collectible plates.",
            "tags" => "collectible plates, rare plates, vintage plates, new plates, used plates, antique plates", 
        ),
        array(
            "category" => "antiques",
            "description" => "new and used general, vintage, rare, and, collectible antiques.",
            "tags" => "collectible antiques, rare antiques, vintage antiques, new antiques, used plates, antique plates", 
        ),
        array(
            "category" => "books", 
            "description" => "new and used general, vintage, rare, and, collectible books.", 
            "tags" => "collectible books, rare books, vintage books, new books, used books, antique books", 
        ),
        array(
            "category" => "comics", 
            "description" => "new and used general, vintage, rare, and, collectible comic books.",
            "tags" => "collectible comics, rare comics, vintage comics, new comics, used comics, antique comics", 
        ),
        array(
            "category" => "memorabilia", 
            "description" => "new and used general, vintage, rare, and, collectible memorabilia",
            "tags" => "collectible memorabilia, rare memorabilia, vintage memorabilia, new memorabilia, used memorabilia, antique memorabilia, sports memorabilia, historic memorabilia, hollywood memorabilia, art memorabilia, music memorabilia",  
        ),
        array(
            "category" => "cds", 
            "description" => "new and used general, vintage, rare, and, collectible compact discs",
            "tags" => "collectible cds, rare cds, vintage cds, new cds, used cds, antique cds, box cds, cd sets",
        ),
        array(
            "category" => "dvds", 
            "description" => "new and used general, vintage, rare, and, collectible movies, blue-ray, and, dvds.", 
            "tags" => "collectible dvds, rare dvds, vintage dvds, new dvds, used dvds, antique dvds, box dvds, dvd sets", 
        ),
        array(
            "category" => "records", 
            "description" => "new and used general, vintage, rare, and, collectible records, vinyl, albums, lps, and, more.",
            "tags" => "collectible records, rare records, vintage records, new records, used records, antique records, vinyl", 
        ),
        array(
            "category" => "cards", 
            "description" => "new and used general, vintage, rare, and, collectible cards.",
            "tags" => "collectible cards, rare cards, vintage cards, new cards, used cards, antique cards, signed cards, autographed cards, rookie cards, anime cards, baseball cards, football cards, hockey cards, basketball cards", 
        ),
        array(
            "category" => "others", 
            "description" => "all other items we carry including toys, trains, and much more!",
            "tags" => "collectible toys, rare toys, vintage toys, new toys, used toys, antique toys, action figures, figurines, hobby trains, posters, scale models", 
        ),
    );

    for ($i = 0; $i < count($categories); $i++) {
        \DB::table('meta_product_categories')->insert([
            'category' => $categories[$i]['category'],
            'description' => $categories[$i]['description'],
            'tags' => $categories[$i]['tags'],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
}
