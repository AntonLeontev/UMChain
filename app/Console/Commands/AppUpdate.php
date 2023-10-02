<?php

namespace App\Console\Commands;

use App\Models\Order;
use Illuminate\Console\Command;

class AppUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates state';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Order::query()
            ->where('is_accepted', true)
            ->get()
            ->each(function (Order $order) {
                $order->update(['is_viewed' => true]);
            });

        return Command::SUCCESS;
    }
}
