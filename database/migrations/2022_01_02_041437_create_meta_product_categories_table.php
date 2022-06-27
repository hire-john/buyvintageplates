<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->text('tags')->nullable();
            $table->boolean('active')->default(true); // display on site
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
        Schema::dropIfExists('meta_product_categories');
    }
}
