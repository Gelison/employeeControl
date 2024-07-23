<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEducationRequest extends FormRequest
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
            'date' => ['string'],
            'doctype_id' => ['required', 'exists:doctype,id'],
            'number' => ['string'],
            'level_id' => ['required', 'exists:level,id'],
            'qualification' => ['string'],
            'speciality' => ['string'],
            'rank' => ['string'],
            'education_form' => ['string'],
            'institution' => ['string'],
        ];
    }
}
