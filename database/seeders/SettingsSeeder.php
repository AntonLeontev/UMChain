<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
			'wallet' => '123456789987654',
			'rate' => 77.70001000,
		]);
    }
}
