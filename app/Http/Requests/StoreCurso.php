<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name'=>'required| min:3',
            'descripcion'=>'required',
            'categoria'=>'required',
        ];
    }
    public function messages(): array
    {
       return [
        'descripcion.required'=>'La descripcion es obligaroria',
       ] ; 
    }
    public function attributes(): array
    {
       return[
        'name'=>'nombre del curso',
       ];
    }
}
