<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'usdt' => ['required', 'decimal:0,8', 'min:1', 'max:' . auth()->user()->usdt],
			'network' => ['string', 'required', 'in:TRC20,ERC20'],
			'tron_wallet' => ['required_if:network,TRC20', 'exclude_if:network,ERC20', 'starts_with:T', 'string', 'size:34', 'nullable'],
			'eth_wallet' => ['required_if:network,ERC20', 'exclude_if:network,TRC20', 'string', 'starts_with:0x', 'size:42', 'nullable'],
        ];
    }

	public function attributes(): array
	{
		return [
			'eth_wallet' => 'ETH wallet',
			'tron_wallet' => 'TRON wallet'
		];
	}

	public function messages(): array
	{
		return [
			'tron_wallet.starts_with' => 'Field :attribute must start with :values character',
			'tron_wallet.required_if' => 'The :attribute field is required',
			'eth_wallet.starts_with' => 'Field :attribute must start with :values character',
			'eth_wallet.required_if' => 'The :attribute field is required',
		];
	}
}
