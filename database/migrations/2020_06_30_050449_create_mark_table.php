<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mark', function (Blueprint $table) {
            $table->unsignedInteger('std_rollno');
            $table->unsignedInteger('subject_id');
            $table->integer('mark');
            
        });
        Schema::table('mark', function (Blueprint $table) {
            $table->foreign('std_rollno')->references('rollno')->on('student');
                     
        });
        Schema::table('mark', function (Blueprint $table) {
            

            $table->foreign('subject_id')->references('id')->on('subject');            
        });
        Schema::table('student', function (Blueprint $table) {
            $table->string('email',100);
            $table->string('address',100);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mark');
    }
}
