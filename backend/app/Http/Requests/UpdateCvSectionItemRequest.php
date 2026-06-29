<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCvSectionItemRequest extends FormRequest
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
            'title' => 'sometimes|nullable|string|max:255',
            'subtitle' => 'sometimes|nullable|string|max:255',
            'date_start' => 'sometimes|nullable|string|max:50',
            'date_end' => 'sometimes|nullable|string|max:50',
            'description' => 'sometimes|nullable|string',
            'order' => 'sometimes|integer',
        ];
    }
}
