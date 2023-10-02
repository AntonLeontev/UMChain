<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'tron' => ['nullable', 'string', 'starts_with:T', 'size:34'],
            'eth' => ['nullable', 'string', 'starts_with:0x', 'size:42'],
        ];
    }

    public function attributes(): array
    {
        return [
            'eth' => 'ETH wallet',
            'tron' => 'Tron wallet',
        ];
    }
}
