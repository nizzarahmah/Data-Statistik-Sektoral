<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemerintahanDaerahPengampuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemerintahan_daerah_pengampu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_opd', 255);
            $table->dateTime('tanggal_dibuat');
            $table->integer('dibuat_oleh');
            $table->dateTime('tanggal_diubah');
            $table->integer('diubah_oleh');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemerintahan_daerah_pengampu');
    }
}
