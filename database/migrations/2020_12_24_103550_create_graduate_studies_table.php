<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraduateStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graduate_studies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->longText('name_of_school');
            $table->string('degree');
            // $table->date('period_date_from');
            // $table->date('period_date_to');
            $table->string('course');
            $table->string('level_units_earned')->nullable();
            $table->date('graduated_date_from')->nullable();
            $table->date('graduated_date_to')->nullable();
            $table->string('academic_reward')->nullable();
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
        Schema::dropIfExists('graduate_studies');
    }
}
