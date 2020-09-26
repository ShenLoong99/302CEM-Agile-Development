<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('ev_name');
            $table->dateTime('date_time_start');
            $table->dateTime('date_time_end');
            $table->string('ev_location');
            $table->string('description');
            $table->unsignedBigInteger('cat');
            $table->double('price');
            $table->unsignedBigInteger('max_participants');
            $table->unsignedBigInteger('admin_id');
            $table->unsignedBigInteger('active');
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
        Schema::dropIfExists('events');
    }
}
