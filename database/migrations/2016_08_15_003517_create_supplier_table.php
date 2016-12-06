<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type'); //类型
            $table->string('org'); //名称
            $table->string('org_en')->nullable(); //英文名称
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
        Schema::table('suppliers', function (Blueprint $table) {
            Schema::drop('suppliers');
        });
    }
}
