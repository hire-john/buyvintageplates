<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_methods', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->string('delivery_type'); // Ground, Air
            $table->string('description');
            $table->string('service_type')->nullable();; // Flat Rate, Priority etc
            $table->string('average_time')->nullable();;
            $table->string('estimated_time')->nullable();;
            $table->boolean('has_insurance')->default(false)->nullable();
            $table->string('insurance_coverage')->nullable();
            $table->integer('max_weight')->nullable();
            $table->integer('max_height')->nullable();
            $table->integer('max_width')->nullable();
            $table->integer('max_length')->nullable();
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
        Schema::dropIfExists('shipping_methods');
    }
}
