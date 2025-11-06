<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PersonRequest extends FormRequest
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
        if($this->is('api/person/create')){
            return [
                'name_en' => ['required', 'unique:people,name_en'],
                'name_ua' => ['required', 'unique:people,name_ua'],
                'type' => ['required', Rule::in(['Actor', 'Composer', 'Writer', 'Director'])],
                'photo' => ['required', 'mimes:png,jpeg'],
                'tags' => ['nullable', 'array'],
                'tags.*' => ['integer']
            ];
        }
        if($this->is("api/person/update/{id}")){
            return [
                'name_en' => ['sometimes', 'unique:people,name_en'],
                'name_ua' => ['sometimes', 'unique:people,name_ua'],
                'type' => ['sometimes', Rule::in(['Actor', 'Composer', 'Writer', 'Director'])],
                'photo' => ['sometimes', 'mimes:png,jpeg'],
                'tags' => ['nullable', 'array'],
                'tags.*' => ['integer']
            ];
        }

        return [];
    }
}
