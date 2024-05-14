<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class WithdrawalCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'amount' => ['required', 'decimal:0,8', 'min:1'],
            'wallet' => ['required', 'starts_with:T', 'string', 'size:34', 'nullable'],
        ];
    }

    public function attributes(): array
    {
        return [
            'wallet' => 'TRON wallet',
        ];
    }

    public function messages(): array
    {
        return [];
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'user_id' => auth()->id(),
        ]);
    }

    public function passedValidation(): void
    {
        $totalUmct = auth()->user()->umt;
        $frozenUmct = auth()->user()->umt_frozen;

        if ($this->amount > $totalUmct - $frozenUmct) {
            throw ValidationException::withMessages([
                'amount' => 'Insufficient balance',
            ]);
        }
    }
}
