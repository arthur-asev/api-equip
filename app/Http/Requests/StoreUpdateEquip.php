<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEquip extends FormRequest
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
            'titulo' => ['required','min:3','max:160','unique:equips'],
            'tipo' => ['required','min:5','max:50'],
            'anofab' => ['required','min:5','max:15'],
            'serialnum' => ['required','min:10','max:160','unique:equips'],

        ];
    }
}