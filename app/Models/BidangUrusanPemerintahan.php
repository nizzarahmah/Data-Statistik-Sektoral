<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangUrusanPemerintahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_opd',
        'nama_bidang',
        'tanggal_dibuat',
        'dibuat_oleh',
        'tanggal_diubah',
        'diubah_oleh'
    ];
    protected $table = "bidang_urusan_pemerintahan";
    public $timestamps = false;
}
