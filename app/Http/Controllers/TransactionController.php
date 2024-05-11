<?php

namespace App\Http\Controllers;

use App\Enums\AccountType;
use App\Models\Transaction;
use Illuminate\Http\JsonResponse;

class TransactionController extends Controller
{
    public function index(): JsonResponse
    {
        $transactions = Transaction::query()
            ->where('account_type', AccountType::umt)
            ->where('user_id', auth()->id())
            ->orderByDesc('created_at')
            ->take(10)
            ->get();

        return response()->json($transactions);
    }
}
