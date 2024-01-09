<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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
            'npwp' => 'string',
            'nama' => 'string|max:80',
            'no_ktp' =>'string',
            'alamat_ktp' =>'string',
            'ttl' => 'string',
            'jenis_kelamin' => 'required|string',
            'email' => 'string|email|unique:registers',
            'no_hp' => 'string',
            'no_telp' => 'string',
            'no_npwp' =>'string',
            'kependudukan' =>'required|string',
        ];
    }
}
