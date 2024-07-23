<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubstitutionRequest extends FormRequest
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
            'information_id' => ['required', 'exists:information,id'],

            'date' => ['required', 'string', 'max 10'],
            'substitutions_occasion'=>['required','string'],
            'order_number' => ['required', 'string', 'max 10'],
            'position_id' => ['required', 'exists:position,id'],
        ];
    }
}
