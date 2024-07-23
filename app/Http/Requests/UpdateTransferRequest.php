<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTransferRequest extends FormRequest
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
            'transfers_occasion' => ['required', 'string'],
            'division_id' => ['required', 'string'],
            'etc_persent' => ['required', 'string'],
            'contract_persent' => ['required', 'string'],
            'contract_beginning' => ['required', 'string'],
            'contract_ending' => ['required', 'string'],
            'position_id' => ['required', 'exists:position,id'],
        ];
    }
}
