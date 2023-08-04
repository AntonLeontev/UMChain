<?php

use App\Models\Setting;
use Illuminate\Support\Collection;

if (! function_exists('settings')) {
	function settings(): Setting
	{
		if (cache('settings', null)) {
			return cache('settings');
		}

		$settings = Setting::first();

		cache(['settings' => $settings]);

		return $settings;
	}
}
