<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class animation_informationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'Original_author' => 'required|min:2',
            'Manufacturer' => 'required|min:2',
            'url' => 'required',            
            //
        ];
    }
}
