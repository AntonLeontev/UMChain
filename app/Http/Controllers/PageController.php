<?php

namespace App\Http\Controllers;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Models\Transaction;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function cabinet()
    {
        $feeUmt = Transaction::query()
            ->where('user_id', auth()->id())
            ->where('direction', TransactionDirection::income)
            ->where('account_type', AccountType::umt)
            ->where('description', 'Referral fee')
            ->sum('amount');

        $feeUsdt = Transaction::query()
            ->where('user_id', auth()->id())
            ->where('direction', TransactionDirection::income)
            ->where('account_type', AccountType::usdt)
            ->where('description', 'Referral fee')
            ->sum('amount');

        $purchaseNumber = Transaction::query()
            ->where('user_id', auth()->id())
            ->where('direction', TransactionDirection::income)
            ->where('account_type', AccountType::umt)
            ->where('description', 'Referral fee')
            ->count();

        $transactions = Transaction::query()
            ->where('user_id', auth()->id())
            ->where('direction', TransactionDirection::income)
            ->where('account_type', AccountType::umt)
            ->orderByDesc('created_at')
            ->take(10)
            ->get();

        return view('personal', compact('feeUmt', 'feeUsdt', 'purchaseNumber', 'transactions'));
    }
}
