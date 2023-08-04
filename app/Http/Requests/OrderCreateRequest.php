<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
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
			'usdt' => ['required', 'decimal:0,8', 'min:' . settings()->threshold, 'max:184467440737'],
			'umt' => ['required', 'decimal:0,8', 'min:0', 'max:184467440737'],
        ];
    }
}
