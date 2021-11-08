<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidangUrusanPemerintahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidang_urusan_pemerintahan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_opd');
            $table->string('nama_bidang', 255);
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
        Schema::dropIfExists('bidang_urusan_pemerintahan');
    }
}
