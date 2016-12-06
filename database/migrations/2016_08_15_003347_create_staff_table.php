<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sn');
            $table->string('name');
            $table->string('name_en');
            $table->string('department');
            $table->string('position');
            $table->integer('gender')->nullable();
            $table->string('password');
            $table->boolean('locked')->default(false);
            $table->boolean('root')->default(false);
            $table->boolean('admin')->default(false);
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
        Schema::table('staff', function (Blueprint $table) {
            Schema::drop('staff');
        });
    }
}
