<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class LamaranRequest extends FormRequest
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
            'alumni_id' => ['required', 'exists:alumnis,id'],
            'lowongan_id' => ['required', 'exists:lowongans,id'],
            'tanggal_melamar' => 'required|date',
            'berkas_lamaran' => 'required|string|max:255',
            'status' => ['required', 'in:diproses,diterima,ditolak'],   
        ];
    }
}
