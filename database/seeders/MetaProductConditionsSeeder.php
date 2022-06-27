<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MetaProductConditionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $conditions = array(
         array(
             "condition" => "new", 
             "description" => "The brand-new, unused, unopened, undamaged item is in its original packaging.", 
         ),
         array(
            "condition" => "used", 
            "description" => "The item was previously used. The item or packaging may have some signs of cosmetic wear, but it is fully operational and functions as intended.", 
        ),
         array(
            "condition" => "open box", 
            "description" => "The item is in excellent, new condition with no wear. The item may be missing the original packaging or protective wrapping, or it may be in the original packaging but not sealed.", 
        ),
         array(
            "condition" => "excellent", 
            "description" => "The item is in like-new condition.", 
        ),
         array(
            "condition" => "very good", 
            "description" => "The item shows minimal wear ", 
        ),
         array(
            "condition" => "good", 
            "description" => "The item shows moderate wear.", 
        ),
         array(
            "condition" => "damaged", 
            "description" => "The item is damaged.", 
        ),
      );

      for ($i = 0; $i < count($conditions); $i++) {
         \DB::table('meta_product_conditions')->insert([
           'condition' => $conditions[$i]['condition'],
           'description' => $conditions[$i]['description'],
           'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
       ]);
     }
 }
}
