<?php

namespace App\Http\Controllers;

use App\Events\WithdrawalCreated;
use App\Http\Requests\ExchangeRequest;
use App\Http\Requests\WithdrawalCreateRequest;
use App\Models\Withdrawal;
use App\Services\Transactions\TransactionService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
    public function exchange(ExchangeRequest $request, TransactionService $service)
    {
        DB::transaction(function () use ($request, $service) {
            DB::table('users')
                ->where('id', auth()->id())
                ->update([
                    'usdt' => auth()->user()->usdt * 100000000 - $request->safe()->usdt * 100000000,
                    'umt' => auth()->user()->umt * 100000000 + $request->safe()->umt * 100000000,
                ]
                );

            $service->createUmtExchange($request->safe()->umt);
            $service->createUsdtExchange($request->safe()->usdt);
        }, 2);

        auth()->user()->refresh();

        return response()->json(['umt' => auth()->user()->umt, 'usdt' => auth()->user()->usdt]);
    }

    public function create(WithdrawalCreateRequest $request)
    {
        DB::transaction(function () use ($request) {
            Withdrawal::create($request->validated());

            auth()->user()->umt_frozen += $request->safe()->amount;
            auth()->user()->save();
        }, 2);

        event(new WithdrawalCreated);

        return response(status: Response::HTTP_CREATED);
    }
}
