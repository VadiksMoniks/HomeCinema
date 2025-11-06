<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
        if($this->is('api/film/create')){
            return [
                'status' => ['required', 'boolean'],
                'name_ua' => ['required', 'string', 'min:2'],
                'name_en' => ['required', 'string', 'min:2'],
                'description_ua' => ['required', 'string', 'min:5'],
                'description_en' => ['required', 'string', 'min:5'],
                'poster' => ['required', 'mimes:jpeg,png,jpg'],
                'screenshots.*' => ['nullable', 'mimes:jpeg,png,jpg'],
                'trailer_url' => ['required', 'string'],
                'year' => ['nullable', 'digits:4', 'integer'],
                'start_date' => ['nullable', 'date'],
                'end_date' => ['nullable', 'date'],
                'tags' => ['nullable', 'array'],
                'tags.*' => ['integer', 'exists:tags,id'],
            ];
        }
        if($this->is('api/film/update/{id}')){
            return [
                'status' => ['required', 'boolean'],
                'name_ua' => ['required', 'string', 'min:2'],
                'name_en' => ['required', 'string', 'min:2'],
                'description_ua' => ['required', 'string', 'min:5'],
                'description_en' => ['required', 'string', 'min:5'],
                'poster' => ['sometimes', 'mimes:jpeg,png,jpg'],
                'screenshots.*' => ['nullable', 'mimes:jpeg,png,jpg'],
                'trailer_url' => ['required', 'string'],
                'year' => ['nullable', 'digits:4', 'integer'],
                'start_date' => ['nullable', 'date'],
                'end_date' => ['nullable', 'date'],
                'tags' => ['nullable', 'array'],
                'tags.*' => ['integer', 'exists:tags,id'],
            ];
        }

        return [];
    }
}
