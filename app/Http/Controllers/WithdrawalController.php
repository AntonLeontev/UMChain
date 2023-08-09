<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExchangeRequest;
use App\Http\Requests\WithdrawalCreateRequest;
use App\Models\EthWallet;
use App\Models\TronWallet;
use App\Models\Withdrawal;
use App\Services\Telegram\TelegramService;
use App\Services\Transactions\TransactionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    public function exchange(ExchangeRequest $request, TransactionService $service)
	{
		DB::transaction(function() use ($request, $service) {
			auth()->user()->update([
				'usdt' => auth()->user()->usdt - $request->safe()->usdt,
				'umt' => auth()->user()->umt + $request->safe()->umt,
			]);
	
			$service->createUmtExchange($request->safe()->umt);
			$service->createUsdtExchange($request->safe()->usdt);
		}, 2);

		auth()->user()->refresh();

		return response()->json(['umt' => auth()->user()->umt, 'usdt' => auth()->user()->usdt]);
	}

	public function create(WithdrawalCreateRequest $request)
	{
		$wallet = $request->safe()->network === 'TRC20'
			? $request->safe()->tron_wallet
			: $request->safe()->eth_wallet;

		DB::transaction(function() use ($request, $wallet) {
			Withdrawal::create([
				'user_id' => auth()->id(),
				'network' => $request->safe()->network,
				'wallet' => $wallet,
				'amount' => $request->safe()->usdt,
			]);

			auth()->user()->update(['usdt' => auth()->user()->usdt - $request->safe()->usdt]);
		}, 2);


		TelegramService::sendMessage('Получена заявка на вывод USDT');

		if ($request->safe()->network === 'TRC20') {
			if ($request->safe()->tron_wallet !== auth()->user()->tronWallet?->address) {
				TronWallet::updateOrCreate(
					['user_id' => auth()->id()],
					['address' => $request->safe()->tron_wallet]
				);
			}
		}

		if ($request->safe()->network === 'ERC20') {
			if ($request->safe()->eth_wallet !== auth()->user()->ethWallet?->address) {
				EthWallet::updateOrCreate(
					['user_id' => auth()->id()],
					['address' => $request->safe()->eth_wallet]
				);
			}
		}

		return response()->json(['usdt' => auth()->user()->usdt]);
	}
}
