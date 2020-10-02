<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('ev_name');
            $table->datetime('date_time_start');
            $table->datetime('date_time_end');
            $table->string('ev_location');
            $table->string('description', 500)->change();
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
        Schema::dropIfExists('event');
    }
}
