<?php

namespace App\Services\Transactions;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Models\Transaction;

class TransactionService
{
	public function createUmtExchange(float $amount): Transaction
	{
		return Transaction::create([
			'user_id' => auth()->id(),
			'direction' => TransactionDirection::income,
			'amount' => $amount,
			'description' => 'USDT exchange',
			'account_type' => AccountType::umt,
		]);
	}

	public function createUsdtExchange(float $amount): Transaction
	{
		return Transaction::create([
			'user_id' => auth()->id(),
			'direction' => TransactionDirection::outcome,
			'amount' => $amount,
			'description' => 'UMCT exchange',
			'account_type' => AccountType::usdt,
		]);
	}
}
