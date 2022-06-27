<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plate_collections', function (Blueprint $table) {
            $table->id();
            $table->integer('manufacturer_id')->unsigned()->nullable();
            $table->string('collection')->nullable();
            $table->text('description')->nullable();
            $table->integer('firing_days')->unsigned()->nullable();
            $table->integer('total_editions')->unsigned()->nullable();
            $table->integer('total_plates')->unsigned()->nullable();
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
        Schema::dropIfExists('plate_collections');
    }
}
