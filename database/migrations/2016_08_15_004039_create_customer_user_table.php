<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('sn');
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('department')->nullable();
            $table->string('department_en')->nullable();
            $table->string('position')->nullable();
            $table->string('position_en')->nullable();
            $table->integer('gender')->nullable();
            $table->string('password');
            $table->boolean('locked')->default(false);
            $table->boolean('hide')->default(false);
            $table->boolean('wechat_user')->default(true);
            $table->boolean('monitor')->default(false);
            $table->boolean('teminal')->default(false);
            $table->boolean('new')->default(true);
            $table->string('lang')->nullable();
            $table->string('img')->nullable();
            $table->string('content')->nullable();
            $table->string('content_en')->nullable();
            $table->integer('created_by');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_users', function (Blueprint $table) {
            Schema::drop('customer_users');
        });
    }
}
