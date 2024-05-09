<?php

namespace App\Console\Commands;

use App\Jobs\GetYesterdayCalories;
use App\Jobs\TurnCaloriesToTokens;
use App\Models\User;
use Illuminate\Console\Command;

class TurnUsersCaloriesToTokens extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:turn-calories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::query()
            ->whereHas('activeDataSource')
            ->lazy();

        foreach ($users as $user) {
            dispatch(new GetYesterdayCalories($user));
        }

        dispatch(new TurnCaloriesToTokens);
    }
}
