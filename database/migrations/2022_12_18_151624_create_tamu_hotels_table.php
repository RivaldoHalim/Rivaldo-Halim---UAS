<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTamuHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tamu_hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_tamu')->nullable();
            $table->string('nama_tamu')->nullable();
            $table->string('alamat_tamu')->nullable();
            $table->string('tempat_tinggal_tamu')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('no_identitas_tamu')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tamu_hotels');
    }
}
