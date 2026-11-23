<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumniResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'nisn' => $this->nisn,
            'nama_lengkap' => $this->nama_lengkap,
            'jurusan' => $this->jurusan,
            'tahun_lulus' => $this->tahun_lulus,
            'no_telp' => $this->no_telp,
            'alamat' => $this->alamat,
            'cv_file' => $this->cv_file,
        ];
    }
}
