<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreRequest extends FormRequest
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
            "title" => ["required", "string", "unique:projects", "min:4", "max:50"],
            "prog_langs" => ["required"],
            "due_to" => [],
            "url" => ["url", "min:3", "max:255"],
            "type_id" => ["required", "integer", "exists:types,id"],
        ];
    }
}