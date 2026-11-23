<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class AlumniRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'nisn' => 'required|string|max:10|unique:alumnis,nisn',
            'nama_lengkap' => 'required|string|max:100',
            'jurusan' => 'required|string|max:42',
            'tahun_lulus' => 'required|date',
            'no_telp' => 'required|string|max:14|unique:alumnis,no_telp',
            'alamat' => 'required|string|max:255',
            'cv_file' => 'required|string|max:2048',
        ];
    }
}
