<?php

namespace App\Http\Requests;

use App\Enums\Activity;
use App\Enums\Gender;
use App\Enums\Level;
use App\Enums\WeightDirection;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UserFitUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'gender' => ['required', new Enum(Gender::class)],
            'age' => ['required', 'int', 'min:5', 'max:120'],
            'height' => ['required', 'int', 'min:0'],
            'weight' => ['required', 'int', 'min:0'],
            'activity' => ['required', new Enum(Activity::class)],
            'level' => ['required', new Enum(Level::class)],
            'direction' => ['required', new Enum(WeightDirection::class)],
        ];
    }
}
