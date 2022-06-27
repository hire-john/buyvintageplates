<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate_info', function (Blueprint $table) {
            $table->id();
            $table->string('bradex')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->integer('production_quantity')->unsigned()->nullable();
            $table->dateTimeTz('production_date')->nullable();
            $table->integer('year_id')->unsigned()->nullable();
            $table->integer('manufacturer_id')->unsigned()->nullable();
            $table->integer('artist_id')->unsigned()->nullable();
            $table->integer('collection_id')->unsigned()->nullable(); 
            $table->integer('collection_edition_id')->unsigned()->nullable(); // first, second, 1, 2
            $table->integer('art_theme_id')->unsigned()->nullable(); // Dogs, Cats, Farming
            $table->integer('character_id')->unsigned()->nullable(); // Betty Boop, Three Stooges, Darth Vader
            $table->integer('brand_id')->unsigned()->nullable(); // Norman Rockwell etc
            $table->integer('type_id')->unsigned()->nullable(); // Collector Plate
            $table->integer('culture_id')->unsigned()->nullable(); // Japanese American Anime etc
            $table->integer('origin_id')->unsigned()->nullable(); // (place of origin)
            $table->integer('era_id')->unsigned()->nullable(); // late 20th century, unknown, 19th century
            $table->integer('decor_style_id')->unsigned()->nullable(); // decorative, colonial, american directoire
            $table->integer('occasion_id')->unsigned()->nullable(); // Holiday, Christmas, All Occasions
            $table->integer('franchise_id')->unsigned()->nullable(); // Star Wars, Lego, Disney
            $table->integer('shape_id')->unsigned()->nullable(); // Round, Oval, Square, Star
            $table->string('materials')->nullable(); // porcelin gold copper (multiple select)
            $table->boolean('is_antique')->default(false)->nullable();
            $table->boolean('is_vintage')->default(false)->nullable();
            $table->boolean('is_limited')->default(false)->nullable();
            $table->boolean('is_rare')->default(false)->nullable();
            $table->decimal('diameter', 13, 2)->unsigned()->nullable();
            $table->decimal('weight', 13, 2)->unsigned()->nullable();
            $table->decimal('original_price', 13, 2)->unsigned()->nullable();
            $table->text('tags')->nullable();
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
        Schema::dropIfExists('plate_info');
    }
}
