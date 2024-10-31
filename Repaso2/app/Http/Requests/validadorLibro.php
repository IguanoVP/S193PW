<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorLibro extends FormRequest
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
            'txtisbn'=> 'required|min:13',
            'txttitulo'=> 'required|max:150',
            'txtPaginas'=> 'required|integer|min:1',
            'txtAutor'=> 'required',
            'txtAnio'=> 'required|integer|digits:4|max:'.date(format: 'Y'),
            'txtEmailEditorial'=> 'required|email:rfc:dns',
            'txtEditorial'=> 'required'
        ];
    }
}
