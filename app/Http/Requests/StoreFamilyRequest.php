<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreFamilyRequest extends FormRequest
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
            'kk_number' => 'required|string|size:16|unique:families,kk_number',
            'head_name' => 'required|string|max:255',
            'head_nik' => 'required|string|size:16|unique:individuals,nik',
            'address' => 'required|string',
            'village' => 'required|string',
            'hamlet' => 'nullable|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'building_status' => 'required|string',
            'notes' => 'nullable|string',
        ];
    }
}
