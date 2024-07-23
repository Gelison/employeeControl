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
            'date' =>['string'],
            'doctype_id' =>['required', 'exists:doctypes,id'],
            'number' =>['string', 'max:10'],
            'level_id' =>['required', 'exists:levels,id'],
            'qualification' =>['string', 'max:255'],
            'speciality' =>['string','max:255'],
            'rank' =>['string','max:5'],
            'education_form' =>['string', 'max:25'],
            'institution' =>['string','max:55'],
        ];
    }
}
