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
            $table->string('type_en')->nullable();
            $table->string('content');
            $table->string('content_en')->nullable();
            $table->string('ca')->nullable();
            $table->string('bar');
            $table->decimal('price',8,2);
            $table->boolean('hot')->default(false);
            $table->boolean('new')->default(false);
            $table->string('stone')->nullable();
            $table->string('metal')->nullable();
            $table->string('color')->nullable();
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
