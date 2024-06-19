<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'accept_ads' => ['nullable', 'boolean'],
            'additional_goals' => ['nullable', 'string', 'max:255'],
            'agree' => ['nullable', 'boolean'],
            'bday' => ['required', 'date'],
            'deadline' => ['nullable', 'integer', 'max:255'],
            'fat_level' => ['nullable', 'integer', 'max:255'],
            'food' => ['nullable', 'integer', 'max:255'],
            'goal' => ['nullable', 'integer', 'max:255'],
            'height_dimension' => ['nullable', 'string', 'max:255'],
            'height_value' => ['nullable', 'integer', 'max:255'],
            'name' => ['required', 'max:255', 'string'],
            'physical_activity' => ['nullable', 'integer', 'max:255'],
            'problems' => ['nullable', 'string', 'max:255'],
            'sex' => ['nullable', 'string', 'max:255'],
            'target_weight_dimension' => ['nullable', 'string', 'max:255'],
            'target_weight_value' => ['nullable', 'integer', 'max:255'],
            'training_place' => ['nullable', 'integer', 'max:255'],
            'training_time' => ['nullable', 'integer', 'max:255'],
            'trainings_count' => ['nullable', 'integer', 'max:255'],
            'water' => ['nullable', 'integer', 'max:255'],
            'weight_dimension' => ['nullable', 'string', 'max:255'],
            'weight_value' => ['nullable', 'integer', 'max:255'],
            'why' => ['nullable', 'integer', 'max:255'],
            'zones' => ['nullable', 'string', 'max:255'],
        ];
    }
}
