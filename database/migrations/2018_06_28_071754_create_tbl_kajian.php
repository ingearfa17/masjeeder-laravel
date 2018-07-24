<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblKajian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kajian', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema_kajian');
            $table->string('nama_ustad');
            $table->string('lokasi_kajian');
            $table->datetime('waktu');
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
        Schema::dropIfExists('kajian');
    }
}
