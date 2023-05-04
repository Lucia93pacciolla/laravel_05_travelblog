<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'producer' => 'required|max:100',
            'cover' => 'required|image',
            'description' => 'required',
        ];
    }

    
    public function messages(): array
    {
        return [
            'title.required' => 'inserisci dove vuoi andare',
            'title.min' => 'inserisci almeno 3 caratteri',
            'producer.required' => 'inserisci una compagnia aerea',
            'producer.required' => 'inserisci massimo 100 caratteri',
            'cover.required' => 'inserisci immagine',
            'description.required' => 'inserisci una descrizione',
        ];
    }
}
