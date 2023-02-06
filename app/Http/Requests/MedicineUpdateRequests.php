<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class MedicineUpdateRequests extends FormRequest
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
            'name' => [Rule::unique('medicines', 'name')->ignore($this->id)],
            'quantity' => 'required',
            'strength' => 'required',
            // 'category_name' => 'required',
            'expiration' => 'required',
            'description' => 'required',
            // 'image' => 'nullable|image|mimes:png,jpg,jpeg'

        ];
    }
}
