<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $fillable = ['judul_lowongan', 'deskripsi', 'tgl_tutup', 'status', 'perusahaan_id']; 
}
