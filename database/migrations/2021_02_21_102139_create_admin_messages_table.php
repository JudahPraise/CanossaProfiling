<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_messages', function (Blueprint $table) {

            $table->id();
            $table->string('sender');
            $table->string('send_to')->nullable();
            $table->string('name')->nullable();
            $table->string('send_to_all')->nullable();
            $table->mediumText('message');
            $table->mediumText('link')->nullable();
            $table->mediumText('file')->nullable();
            $table->string('read')->default('notread');
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
        Schema::dropIfExists('admin_messages');
    }
}
