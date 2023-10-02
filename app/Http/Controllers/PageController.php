<?php

namespace App\Http\Controllers;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Models\Transaction;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
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

        return view('personal', compact('feeUmt', 'feeUsdt', 'purchaseNumber'));
    }
}
