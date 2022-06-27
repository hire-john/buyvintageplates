<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_metadata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();;
            $table->string('description')->nullable();;
            $table->string('author')->nullable();;
            $table->string('twitter_card')->nullable();;
            $table->string('twitter_site')->nullable();;
            $table->string('twitter_creator')->nullable();;
            $table->string('og_locale')->nullable();;
            $table->string('og_site_name')->nullable();;
            $table->string('og_url')->nullable();;
            $table->string('og_title')->nullable();;
            $table->string('og_type')->nullable();;
            $table->string('og_description')->nullable();;
            $table->string('og_image_uri')->nullable();;
            $table->string('tags')->nullable();;
            $table->string('route')->nullable();;
            $table->string('isPartOf')->nullable();;
            $table->text('breadCrumb')->nullable();;
            $table->text('mainContentOfPage')->nullable();;
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
        Schema::dropIfExists('route_metadata');
    }
}