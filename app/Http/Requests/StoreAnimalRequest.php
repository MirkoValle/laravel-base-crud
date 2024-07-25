<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnimalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' =>['required', 'min:1', 'max:100'],
            'specie' =>['required', 'min:1', 'max:100'],
            'razza' =>['required', 'min:1', 'max:100'],
            'eta' =>['required', 'integer', 'min:1', 'max:500'],
            'sesso' =>['required', 'min:1', 'max:10'],
            'colore' =>['required', 'min:1', 'max:100'],
            'peso' =>['required', 'numeric', 'min:1', 'max:2000'],
            'altezza' =>['required', 'numeric', 'min:1', 'max:5000'],
            'url_img' =>['required', 'url'],
            'note' =>['required', 'nullable', 'max:1000'],
        ];
    }
}