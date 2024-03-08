<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'telepon_user' => ['nullable', 'regex:/^08\d{9,11}$/', 'max:255'],
            'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
            'foto_user' => 'nullable|image|mimes:jpeg,png,jpg|max:10048',
            'alamat_user' => 'nullable|string',
        ];
    }
}
