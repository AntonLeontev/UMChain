<?php

namespace App\Http\Requests;

use App\Enums\Activity;
use App\Enums\Gender;
use App\Enums\Level;
use App\Enums\WeightDirection;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255', 'sometimes'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id), 'sometimes'],
            'tron' => ['nullable', 'string', 'starts_with:T', 'size:34', 'sometimes'],
            'eth' => ['nullable', 'string', 'starts_with:0x', 'size:42', 'sometimes'],
            'gender' => ['nullable', new Enum(Gender::class), 'sometimes'],
            'age' => ['nullable', 'int', 'min:5', 'max:120', 'sometimes'],
            'height' => ['nullable', 'int', 'min:0', 'sometimes'],
            'weight' => ['nullable', 'int', 'min:0', 'sometimes'],
            'activity' => ['nullable', new Enum(Activity::class), 'sometimes'],
            'level' => ['nullable', new Enum(Level::class), 'sometimes'],
            'direction' => ['nullable', new Enum(WeightDirection::class), 'sometimes'],
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
