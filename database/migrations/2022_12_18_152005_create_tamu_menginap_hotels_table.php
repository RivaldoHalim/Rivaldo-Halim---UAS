<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTamuMenginapHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_menginap_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('deposit_tamu')->nullable();
            $table->dateTime('tanggal_menginap')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tamu_menginap_hotels');
    }
}
