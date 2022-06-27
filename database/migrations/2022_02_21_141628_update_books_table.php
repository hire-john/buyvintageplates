<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function(Blueprint $table) {
            $table->id();
            $table->bigInteger('bvp_id')->unsigned()->nullable()->unique();
            $table->bigInteger('book_info_id')->unsigned();
            $table->string('title', 80);
            $table->text('description');
            $table->integer('condition_id')->unsigned();
            $table->boolean('is_autographed')->default(false)->nullable();
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
            $table->string('hash_lookup', 255);
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
        //
    }
}
