<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JadwalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'lowongan_id' => $this->lowongan_id,
            'nama_tahapan' => $this->nama_tahapan,
            'tgl_pelaksanaan' => $this->tgl_pelaksanaan,
            'lokasi' => $this->lokasi,
            'email_perusahaan' => $this->email_perusahaan,
        ];
    }
}
