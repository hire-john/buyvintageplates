<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InputFieldDescriptionsTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
      $fields = array(
            array(
                  "category" => 0,  
                  "field" => "bvp_id",
                  "short_description" => "bvp_id is the buyvintageplates custom product id used internally", 
                  "long_description" => "bvp_id is comprised of four sections - the leading BVPID to indicate its and internal id, then three groups of four digits and a two digital category post-fix. Group one closest to the prefix indicates shelf location, group two indicates specific placement on shelf, group three the final four digital number group exists for custom anillary data and can vary wildly. The remaining two digital post-fix is the category ID.", 
                  "example" => "BVPID-0001-0001-00001-01",
            ),
            array(
                  "category" => 0,  
                  "field" => "bvp_location_id",
                  "short_description" => "bvp_location_id is the buyvintageplates custom product location id used internally", 
                  "long_description" => "bvp_location_id is an additional custom formatted (use any format you'd like) to help further indicate a products location in a physical logistical inventory.", 
                  "example" => "TOTE 17 SHELF",
            ),
            array(
                  "category" => 0,  
                  "field" => "manufacturer_id",
                  "short_description" => "is an ID code or string printed by the manfacturer on the product", 
                  "long_description" => "", 
                  "example" => "SKU, ISBN, UPC",
            ),
            array(
                  "category" => 0,  
                  "field" => "title",
                  "short_description" => "product title in generally 80 characters or less", 
                  "long_description" => "this is a descriptive product title that will serve as the products title on the website, metadata, and on other ecommere platforms", 
                  "example" => "Enter Example Title",
            ),
            array(
                  "category" => 0,  
                  "field" => "description",
                  "short_description" => "coming soon", 
                  "long_description" => "", 
                  "example" => "Enter Example Description",
            ),
            array(
                  "category" => 0,  
                  "field" => "active",
                  "short_description" => "a switch to list/de-list the product across all platforms", 
                  "long_description" => "", 
                  "example" => "",
            ),
            array(
                  "category" => 0,  
                  "field" => "available",
                  "short_description" => "whether a product can be purchased or is just listed as sold for seo purposes, or historic marketing reasons.", 
                  "long_description" => "", 
                  "example" => "",
            ),
            array(
                  "category" => 0,  
                  "field" => "category",
                  "short_description" => "product categories on the store site", 
                  "long_description" => "", 
                  "example" => "0 = general, 1 = plates, 2 = antiques, 3 = books",
            ),
      );

      for ($i = 0; $i < count($fields); $i++) {
            \DB::table('input_field_descriptions')->insert([
                  'category' => $fields[$i]['category'],
                  'field' => $fields[$i]['field'],
                  'short_description' => $fields[$i]['short_description'],
                  'long_description' => $fields[$i]['long_description'],
                  'example' => $fields[$i]['example'],
                  'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);
      }
}
}