<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RouteMetadataTableSeeder extends Seeder
{
    /**
     * `author`, `breadCrumb`, `created_at`, `deleted_at`, `description`, `id`, `isPartOf`, `mainContentOfPage`, `og_description`, `og_image_uri`, `og_locale`, `og_site_name`, `og_title`, `og_type`, `og_url`, `route`, `subtitle`, `tags`, `title`, `twitter_card`, `twitter_creator`, `twitter_site`, `updated_at`
     *
     * @return void
     */
    public function run()
    {
        $site_name = "BuyVintagePlates.com";
        $company_name = "BuyVintagePlates, llcs.";
        $description = "Shop for new an used vintage, rare, antique, collectible plates, books, comics, cards, antiques, records, cds, dvds, and more!";
        $tags = "shop, buy, sell, trade, new, used, vintage, rare, antique, collectible, plates, books, comics, cards, antiques, records, cds, dvds, toys, trains, posters";

        $routes = array(
            array(
                "route" => "/",
                "title" => "Homepage", 
                "subtitle" => "Welcome to " . $site_name,
            ),
            array(
                "route" => "about",
                "title" => "About", 
                "subtitle" => "About " . $site_name,
            ),
            array(
                "route" => "contact",
                "title" => "Contact", 
                "subtitle" => "Contact " . $site_name,
            ),
            array(
                "route" => "categories",
                "title" => "Shop Categories", 
                "subtitle" => "Browse all our shop product categories!",
            ),
            array(
                "route" => "categories/plates",
                "title" => "Shop Plates", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Plates",
            ),
            array(
                "route" => "categories/plates/plate",
                "title" => "Shop Plates", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Plates",
            ),
            array(
                "route" => "categories/records",
                "title" => "Shop Records", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Records",
            ),
            array(
                "route" => "categories/records/record",
                "title" => "Shop Records", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Records",
            ),
            array(
                "route" => "categories/books",
                "title" => "Shop Books", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Books",
            ),
            array(
                "route" => "categories/books/book",
                "title" => "Shop Books", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Books",
            ),
            array(
                "route" => "categories/comics",
                "title" => "Shop Comics", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Comics",
            ),
            array(
                "route" => "categories/comics/comic",
                "title" => "Shop Comics", 
                "subtitle" => "New and Used, Vintage, Rare, Collectible, and, Antique Comics",
            ),
            array(
                "route" => "categories/antiques",
                "title" => "Shop Antiques", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible Antiques",
            ),
            array(
                "route" => "categories/antiques/antique",
                "title" => "Shop Antiques", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible Antiques",
            ),
            array(
                "route" => "categories/cards",
                "title" => "Shop Cards", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible Cards",
            ),
            array(
                "route" => "categories/cards/card",
                "title" => "Shop Cards", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible Cards",
            ),
            array(
                "route" => "categories/dvds",
                "title" => "Shop DVDs", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible DVDs",
            ),
            array(
                "route" => "categories/dvds/dvd",
                "title" => "Shop DVDs", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible DVDs",
            ),
            array(
                "route" => "categories/cds",
                "title" => "Shop CDs", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible CDs",
            ),
            array(
                "route" => "categories/cds/cd",
                "title" => "Shop CDs", 
                "subtitle" => "New and Used, Vintage, Rare, and, Collectible CDs",
            ),
            array(
                "route" => "categories/others",
                "title" => "Shop Our Other Items", 
                "subtitle" => "Everything else New, Used, Vintage, Rare, and, Collectible that we sell!",
            ),
            array(
                "route" => "categories/others/other",
                "title" => "Shop Our Other Items", 
                "subtitle" => "Everything else New, Used, Vintage, Rare, and, Collectible that we sell!",
            ),
        );

        for ($i = 0; $i < count($routes); $i++) {
            \DB::table('route_metadata')->insert([
                'route' => $routes[$i]['route'],
                'title' => $routes[$i]['title'],
                'subtitle' => $routes[$i]['subtitle'],
                'description' => $description,
                'tags' => $tags,
                'author' => $company_name,
                'twitter_creator' => $company_name,
                'twitter_site' => $site_name,
                'og_site_name' => $site_name,
                'og_title' => $routes[$i]['title'],
                'og_description' => $description,
                'og_locale' => "en_US",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }
    }
}