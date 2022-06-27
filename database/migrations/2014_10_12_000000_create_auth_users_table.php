<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('auth_users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('salutation')->unsigned()->nullable();
            $table->string('first_name', 100);
            $table->string('middle_name', 100)->nullable();
            $table->string('last_name', 100);
            $table->string('birthdate', 100)->nullable();
            $table->bigInteger('mobile_telephone')->unsigned()->nullable();
            $table->bigInteger('home_telephone')->unsigned()->nullable();
            $table->bigInteger('work_telephone')->unsigned()->nullable();
            $table->string('address_one', 100)->nullable();
            $table->string('address_two', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->integer('state')->unsigned()->nullable();
            $table->integer('zip')->unsigned()->nullable();
            $table->integer('country')->unsigned()->nullable();
            $table->integer('fips')->unsigned()->nullable();
            $table->integer('gender')->unsigned()->nullable();
            $table->integer('religion')->unsigned()->nullable();
            $table->integer('ethnicity')->unsigned()->nullable();
            $table->integer('relationship_status')->unsigned()->nullable();
            $table->integer('role')->unsigned()->nullable();
            $table->string('employer', 100)->nullable();
            $table->integer('military_rank')->unsigned()->nullable();
            $table->integer('veteran_status')->unsigned()->nullable();
            $table->integer('student_status')->unsigned()->nullable();
            $table->string('email', 255)->unique();
            $table->string('username', 255)->unique();
            $table->string('password', 255);
            $table->string('created_at_domain', 255)->nullable();
            $table->text('settings')->nullable();
            $table->string('avatar_url', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('twitter_url', 255)->nullable();
            $table->string('instagram_url', 255)->nullable();
            $table->string('facebook_url', 255)->nullable();
            $table->boolean('confirmed')->default(false);
            $table->boolean('prospectified')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('telephone_verified_at')->nullable();
            $table->boolean('user_banned')->default(false);
            $table->boolean('user_active')->default(false);
            $table->boolean('user_deliquent')->default(false);
            $table->dateTimeTz('first_login')->nullable()->default(null);
            $table->dateTimeTz('last_login')->nullable();
            $table->ipAddress('created_visitor_ip')->nullable();
            $table->macAddress('created_device_mac')->nullable();
            $table->ipAddress('last_visitor_ip')->nullable();
            $table->macAddress('last_device_mac')->nullable();
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('auth_users');
    }
}
