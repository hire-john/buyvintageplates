<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPricingDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_pricing_data', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bvp_id')->unsigned()->nullable()->unique();
            $table->integer("iso_4217_currency")->unsigned()->nullable();
            $table->boolean('sale')->default(false);
            $table->integer("sale_id")->unsigned()->nullable();
            $table->integer("sale_percentage")->unsigned()->nullable();
            $table->decimal('sale_price', 13, 2)->unsigned()->nullable();
            $table->decimal('acquisition_cost', 13, 2)->unsigned()->nullable();
            $table->decimal('asking_price', 13, 2)->unsigned()->nullable();
            $table->boolean('allow_offers')->default(true);
            $table->decimal('lowest_offer', 13, 2)->unsigned()->nullable();
            $table->boolean('auction_item')->default(false)->nullable();
            $table->boolean('auction_buy_now')->default(false)->nullable();
            $table->decimal('auction_reserve_price', 13, 2)->unsigned()->nullable();
            $table->decimal('auction_starting_bid', 13, 2)->unsigned()->nullable();
            $table->dateTimeTz('auction_start_date')->nullable();
            $table->dateTimeTz('auction_end_date')->nullable();
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
        Schema::dropIfExists('product_pricing_data');
    }
}
