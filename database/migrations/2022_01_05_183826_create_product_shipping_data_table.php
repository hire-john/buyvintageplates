<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductShippingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_shipping_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bvp_id')->unsigned()->nullable()->unique();
            $table->boolean('local_pickup')->default(true);
            $table->bigInteger('shipping_item_weight')->unsigned()->nullable();
            $table->bigInteger('shipping_material_weight')->unsigned()->nullable();
            $table->bigInteger('shipping_total_weight')->unsigned()->nullable();
            $table->decimal('shipping_item_cost', 13, 2)->unsigned()->nullable();
            $table->decimal('shipping_material_cost', 13, 2)->unsigned()->nullable();
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
        Schema::dropIfExists('product_shipping_data');
    }
}
