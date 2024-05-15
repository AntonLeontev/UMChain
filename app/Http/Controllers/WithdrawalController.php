<?php

namespace App\Http\Controllers;

use App\Events\WithdrawalCreated;
use App\Http\Requests\WithdrawalCreateRequest;
use App\Models\Withdrawal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class WithdrawalController extends Controller
{
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

    public function markSent(Withdrawal $withdrawal): RedirectResponse
    {
        $withdrawal->is_sent = true;
        $withdrawal->save();

        return redirect()->back();
    }
}
