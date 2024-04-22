<?php

namespace App\Jobs;

use App\Enums\AccountType;
use App\Enums\TransactionDirection;
use App\Models\Transaction;
use App\Models\User;
use App\Services\Fit\FitService;
use App\Services\GoogleOAuth\Exceptions\InvalidGrantException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TurnCaloriesToTokens implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public User $user)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(FitService $fit): void
    {
        try {
            $calories = $fit->caloriesForYesterday($this->user);
        } catch (InvalidGrantException $e) {
            Log::channel('telegram')->error('Fit error: '.$e->getMessage().' user id: '.$this->user->id.' user name: '.$this->user->name);
            $this->fail();
        }

        $tokens = $calories * $this->user->token_coef;

        DB::beginTransaction();

        Transaction::create([
            'user_id' => $this->user->id,
            'direction' => TransactionDirection::income,
            'amount' => $tokens,
            'description' => 'Calories to tokens',
            'account_type' => AccountType::umt,
        ]);

        $this->user->update(['umt' => $tokens + $this->user->umt]);

        DB::commit();
    }
}
