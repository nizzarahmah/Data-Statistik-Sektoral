<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianData extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_referensi',
        'nama_file',
        'bidang_urusan_pemerintahan_id',
        'pd_pengampu_id',
        'tahun_rilis',
        'status',
        'ketersediaan_metadata',
        'klasifikasi_data',
        'upload_file',
        'keterangan',
        'dibuat_oleh',
        'tanggal_dibuat',
        'diubah_oleh',
        'tanggal_diubah'
    ];
    protected $table = "file_manajemen";
    public $timestamps = false;
}
