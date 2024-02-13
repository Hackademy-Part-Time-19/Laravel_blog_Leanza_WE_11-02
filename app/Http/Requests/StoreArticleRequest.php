<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            
            'title' => ['required','max:550'],
            'author' => ['required', 'max:30'],
            'category' => ['required','max:255'],
            'content' => ['required', 'max:5000'],
        ];
        
    }

    public function messages()
    {
        return [
            'title.required' => "Il campo titolo è obbligatorio",
            'title.max' => 'Il campo titolo è troppo lungo',
            'author.required' => 'Il campo autore è obbligatorio',
            'author.max' => 'Il campo autore è troppo lungo',
            'category.required' => 'Selezionare una categoria',
            'content.required' => 'Il campo articolo è obbligatorio',
            'content.max' => 'Il campo articolo è troppo lungo',
        ];
    }
}
