<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $fillable = ['user_id', 'nisn', 'nama_lengkap', 'jurusan', 'tahun_lulus', 'no_telp', 'alamat', 'cv_file'];
}
