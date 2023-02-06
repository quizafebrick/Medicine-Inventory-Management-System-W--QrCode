<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequests extends FormRequest
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
            'name' => 'required|unique:medicines,name',
            'strength' => 'required',
            'category_name' => 'required',
            'expiration' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ];
    }
}
