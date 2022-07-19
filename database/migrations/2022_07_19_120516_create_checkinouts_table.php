<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkinouts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('checkin')->nullable();
            $table->string('CheckOut')->nullable();
            $table->string('Currentday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkinouts');
    }
};
