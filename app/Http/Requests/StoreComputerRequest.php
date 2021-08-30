<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComputerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'processor_title' => 'required',
            'processor_speed' => 'required',
            'ram_type' => 'required',
            'ram_speed' => 'required',
            'gpu_title' => 'required',
            'gpu_speed' => 'required',
            'secondary_memory_size' => 'required',
        ];
    }
}
