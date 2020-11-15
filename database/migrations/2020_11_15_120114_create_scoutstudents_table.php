<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoutstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoutstudents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('scout_id');
            $table->unsignedBigInteger('student_id');

            $table->foreign('scout_id')
                   ->references('id')
                   ->on('scouts')
                   ->onDelete('cascade');

            $table->foreign('student_id')
                   ->references('id')
                   ->on('students')
                   ->onDelete('cascade');
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
        Schema::dropIfExists('scoutstudents');
    }
}
