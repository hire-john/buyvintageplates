<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTablesAddHashes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('plate_info', function(Blueprint $table) {
            $table->string('hash_lookup', 255);
        });
        Schema::table('plate_collections', function(Blueprint $table) {
            $table->string('hash_lookup', 255);
        });
        Schema::table('plate_artists', function(Blueprint $table) {
            $table->string('hash_lookup', 255);
        });
        Schema::table('plate_manufacturers', function(Blueprint $table) {
            $table->string('hash_lookup', 255);
        });
        Schema::table('plates', function(Blueprint $table) {
            $table->string('hash_lookup', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
