<?php

use App\Models\Banner;
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

if (! function_exists('banners')) {
	function banners(): Collection
	{
		if (cache('banners', null)) {
			return cache('banners');
		}

		$banners = Banner::where('is_active', true)->get();

		cache(['banners' => $banners]);

		return $banners;
	}
}
