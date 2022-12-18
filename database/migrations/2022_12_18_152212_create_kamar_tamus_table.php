<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKamarTamusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamar_tamus', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->float('no_kamar_tamu')->nullable();
            $table->string('jenis_kamar')->nullable();
            $table->float('harga_kamar')->nullable();
            $table->text('keterangan')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kamar_tamus');
    }
}
