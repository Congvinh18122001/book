<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
        });
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('category');
            $table->string('title');
            $table->integer('price');
            $table->string('href_param');
            $table->string('content');
            $table->date('create_date');
            $table->date('update_date');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
