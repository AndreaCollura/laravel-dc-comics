<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'description' => 'required',
            'image' => 'required|max:255',
            'price' => 'required|decimal:5,2',
            'series' => 'required|max:255|min:3',
            'release' => 'required',
            'type' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "il titolo é obbligatorio",
            'title.max' => "il titolo non deve superare 255 caratteri",
            'title.min' => "il titolo é troppo corto, almeno 3 caratteri",
            'description.required' => "Questo campo non puó essere vuoto!",
            'image.required' => "Questo campo non puó essere vuoto!",
            'image.max' => "L'URL non deve superare 255 caratteri",
            'price.required' => "Questo campo non puó essere vuoto!",
            'price.decimal' => "La cifra inserita non é valida",
            'series.required' => "Questo campo non puó essere vuoto!",
            'release.required' => "Questo campo non puó essere vuoto!",
            'type.required' => "Questo campo non puó essere vuoto!"




        ];
    }
}
