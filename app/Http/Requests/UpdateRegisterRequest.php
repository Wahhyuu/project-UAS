<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'npwp' => 'required|string|max:255',
            'nama' => 'required|string|max:80',
            'no_ktp' =>'required|string|max:16',
            'alamat_ktp' =>'required|string|max:255',
            'ttl' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'email' => 'required|string|email|unique:registers',
            'no_hp' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
            'no_npwp' =>'required|string|max:255',
            'kependudukan' =>'required|string|max:255',
        ];
    }
}
