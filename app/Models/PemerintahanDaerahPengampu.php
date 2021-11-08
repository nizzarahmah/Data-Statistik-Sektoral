<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemerintahanDaerahPengampu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_opd',
        'tanggal_dibuat',
        'dibuat_oleh',
        'tanggal_diubah',
        'diubah_oleh'
    ];
    protected $table = "pemerintahan_daerah_pengampu";
    public $timestamps = false;
}
