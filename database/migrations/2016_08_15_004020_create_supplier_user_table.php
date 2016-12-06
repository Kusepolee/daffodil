<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id');
            $table->integer('sn');
            $table->string('name');
            $table->string('name_en');
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
            $table->integer('created_by');
            $table->string('img')->nullable();
            $table->string('content')->nullable();
            $table->string('content_en')->nullable();
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
        Schema::table('supplier_users', function (Blueprint $table) {
            Schema::drop('supplier_users');
        });
    }
}
