<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LamaranResource extends JsonResource
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
            'lowongan_id' => $this->lowongan_id,
            'tanggal_melamar' => $this->tanggal_melamar,
            'berkas_lamaran' => $this->berkas_lamaran,
            'status' => $this->status,
        ];
    }
}
