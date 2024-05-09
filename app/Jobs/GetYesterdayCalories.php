<?php

namespace App\Jobs;

use App\Models\CalorySpend;
use App\Models\User;
use App\Services\Fit\FitService;
use App\Services\GoogleOAuth\Exceptions\InvalidGrantException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class GetYesterdayCalories implements ShouldQueue
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

        CalorySpend::create([
            'user_id' => $this->user->id,
            'calories' => $calories,
            'coefficient' => $this->user->token_coef,
            'calories_sum' => $calories * $this->user->token_coef,
        ]);
    }
}
