<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileManajemenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_manajemen', function (Blueprint $table) {
            $table->id();
            $table->string('kode_referensi', 100);
            $table->string('nama_file', 255);
            $table->integer('bidang_urusan_pemerintahan');
            $table->year('tahun_rilis');
            $table->string('status', 100);
            $table->string('ketersediaan_metadata', 100);
            $table->string('klasifikasi_data', 255);
            $table->string('indikator_kinerja', 100);
            $table->text('keterangan')->nullable();
            $table->integer('dibuat_oleh');
            $table->dateTime('tanggal_dibuat');
            $table->integer('diubah_oleh');
            $table->dateTime('tanggal_diubah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('file_manajemen');
    }
}
