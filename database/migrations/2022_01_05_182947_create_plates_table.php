<?php

/**
* This table is the plates inventory table used to store data about actual on-hand plates.
* Most of the information here is linked via foreign key to a reference table that contains
* a "field_info" for this instance it would be the "plate_field_info" tables. For instance
* The list of all plate manufacturers would be in the plate_manufacturer_info table. For a 
* list of Plate Collections/Series look to the plate_series_info table.
*
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bvp_id')->unsigned()->nullable()->unique();
            $table->bigInteger('plate_info_id')->unsigned();
            $table->string('title', 80);
            $table->text('description');
            $table->integer('condition_id')->unsigned();
            $table->string('production_number')->nullable();
            $table->boolean('is_registered')->default(false)->nullable();
            $table->boolean('has_box')->default(false)->nullable();
            $table->boolean('has_papers')->default(false)->nullable();
            $table->boolean('has_certificates')->default(false)->nullable();
            $table->decimal('retail_price', 13, 2)->unsigned()->nullable();
            $table->decimal('sale_price', 13, 2)->unsigned()->nullable();
            $table->decimal('acquisition_cost', 13, 2)->unsigned()->nullable();
            $table->string('ebay_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('amazon_id')->nullable();
            $table->string('mercari_id')->nullable();
            $table->string('ebay_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('amazon_url')->nullable();
            $table->string('mercari_url')->nullable();
            $table->timestampsTz();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plates');
    }
}

