<?php

namespace Database\Seeders;

use App\Models\ApplicationToken;
use Illuminate\Database\Seeder;

class ApplicationTokensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ApplicationToken::create([
            'system' => 0,
            'miners' => 0,
        ]);
    }
}
