<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalRekrut extends Model
{
    protected $fillable = [
        'lowongan_id',
        'nama_tahapan',
        'tgl_pelaksanaan',
        'lokasi',
        'email_perusahaan',
    ];
}
