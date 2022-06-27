<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookGoogleInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_google_info', function (Blueprint $table) {
            $table->id();
            $table->string('etag', 255)->nullable();
            $table->string('google_id', 255)->nullable();
            $table->string('self_link', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->text('authors')->nullable();
            $table->string('publisher', 255)->nullable();
            $table->string('publishedDate', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('categories')->nullable();
            $table->text('textSnippet')->nullable();
            $table->text('industryIdentifiers')->nullable();
            $table->integer('pageCount')->nullable();
            $table->integer('printedPageCount')->nullable();
            $table->text('dimensions')->nullable();
            $table->string('printType', 255)->nullable();
            $table->string('maturityRating', 255)->nullable();
            $table->string('small_thumbnail', 255)->nullable();
            $table->string('thumbnail', 255)->nullable();
            $table->string('medium_thumbnail', 255)->nullable();
            $table->string('large_thumbnail', 255)->nullable();
            $table->string('image_one', 255)->nullable();
            $table->string('image_two', 255)->nullable();
            $table->string('image_three', 255)->nullable();
            $table->string('language', 80)->nullable();
            $table->string('averageRating', 80)->nullable();
            $table->string('ratingsCount', 80)->nullable();
            $table->string('country', 80)->nullable();
            $table->boolean('is_ebook')->nullable();
            $table->boolean('epub_available')->nullable();
            $table->boolean('pdf_available')->nullable();
            $table->boolean('in_public_domain')->nullable();
            $table->softDeletes();
            $table->timestampsTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_google_info');
    }
}
