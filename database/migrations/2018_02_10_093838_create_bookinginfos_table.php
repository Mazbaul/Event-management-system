<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookinginfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookinginfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phn_num');
            $table->string('address');
            $table->string('type');
            $table->string('event_id');
            $table->timestamps();
        });

        Schema::table('bookinginfos', function ($table){
                    $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
                });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookinginfos');
    }
}
