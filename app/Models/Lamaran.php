<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    protected $table = 'lamarans';

    protected $fillable = [
        'alumni_id',
        'lowongan_id',
        'berkas_lamaran',
        'tanggal_melamar',
        'status',
    ];
}
