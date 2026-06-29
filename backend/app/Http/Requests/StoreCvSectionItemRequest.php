<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCvSectionItemRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'section_id' => 'required|exists:cv_sections,id',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'date_start' => 'nullable|string|max:50',
            'date_end' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'order' => 'nullable|integer',
        ];
    }
}
