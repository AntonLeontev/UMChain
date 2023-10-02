<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'email' => 'hello@umchain.org',
            'threshold' => 100,
            'tron_wallet' => 'TBhpGXHjtRXgD2Nx4kEqPj3Xct79asmtP8',
            'eth_wallet' => '0x05667793b8dad9376a0e37eee5cdc4e18f08cdb8',
            'rate' => 77.70001000,
        ]);
    }
}
