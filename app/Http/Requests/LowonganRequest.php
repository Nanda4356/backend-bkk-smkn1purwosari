<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LowonganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'perusahaan_id' => ['required', 'exists:perusahaans,id'],
            'judul_lowongan' => 'required|string|max:100',
            'deskripsi' => 'required|string|max:255',
            'tgl_tutup' => 'required|date',
            'status' => 'required|boolean',
        ];
    }
}
