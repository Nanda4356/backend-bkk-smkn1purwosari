<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LowonganResource extends JsonResource
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
            'perusahaan_id' => $this->perusahaan_id,
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'tanggal_dibuka' => $this->tanggal_dibuka,
            'tanggal_ditutup' => $this->tanggal_ditutup,
            'status' => $this->status,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
