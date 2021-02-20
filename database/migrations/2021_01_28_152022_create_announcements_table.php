<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {

            $table->id();
            $table->string('ann_title');
            $table->date('ann_start');
            $table->date('ann_end');
            $table->string('ann_affected');
            $table->mediumText('ann_other')->nullable();
            $table->string('link')->nullable();
            $table->mediumText('attachment')->nullable();
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
        Schema::dropIfExists('announcements');
    }
}
