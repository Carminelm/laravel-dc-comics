<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:20',
            'series' => 'required|min:3|max:50',


        ];
    }

    public function messages(){
        return [
            'title.required' => 'il titolo non e valido',
            'title.min' => 'il titolo deve avere min 3 caratteri',
           'title.max' => 'il titolo deve avere max 20 caratteri',
            'series.required' => 'la serie inserita non e valida',
            'series.min' => 'la serie inserita deve avere min 3 caratteri',
            'series.max' => 'la serie inserita deve avere max 50 caratteri',

        ];
    }
}
