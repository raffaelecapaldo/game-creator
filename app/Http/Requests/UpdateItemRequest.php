<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
            'name' => 'max:255|unique:items|min:3',
            'type' => 'max:255|required',
            'category' => 'max:255|required',
            'weight' => 'max:50|required|min:3',
            'cost' => 'max:50|required|min:3',
            'damage_dice' => 'max:50|required|min:3'
        ];
    }
}
