<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_en')->nullable();
            $table->string('type');
            $table->string('content');
            $table->string('ca')->nullable();
            $table->integer('sn');
            $table->string('shop');
            $table->decimal('price',8,2);
            $table->integer('create_by');
            $table->string('img')->nullable();
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
        Schema::table('products', function (Blueprint $table) {
            Schema::drop('products');
        });
    }
}
