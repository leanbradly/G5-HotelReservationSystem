<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->integer('reservation_status_id')->unsigned();
            $table->integer('guest_id')->unsigned();
            $table->integer('room_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_statuses');
    }
}
