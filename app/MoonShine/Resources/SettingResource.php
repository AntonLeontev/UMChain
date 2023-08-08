<?php

namespace App\MoonShine\Resources;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Date;
use MoonShine\Fields\Email;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class SettingResource extends Resource
{
	public static string $model = Setting::class;

	public static string $title = 'Settings';

	public static array $activeActions = ['edit'];

	public function fields(): array
	{
		return [
		    Email::make('email')->required(),
			Number::make('Мин заказ', 'threshold')
				->expansion('USDT')
				->min(0)
				->hint('Сумма минимального заказа в USDT'),
			Text::make('TRC20 кошелёк', 'tron_wallet')
				->required(),
			Text::make('ERC20 кошелёк', 'eth_wallet')
				->required(),
			Number::make('Курс', 'rate')
				->hint('Стоимость 1 USDT в UMT')
				->expansion('UMT')
				->customAttributes(['step' => '0.00000001'])
				->required(),
			Date::make('Заморозка', 'default_freeze')
				->format('d.m.Y'),
			Number::make('UMCT %', 'umt_percent')
				->hint('% комисси по умолчанию для UMCT')
				->expansion('%'),
			Number::make('USDT %', 'usdt_percent')
				->hint('% комисси по умолчанию для USDT')
				->expansion('%'),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
			'email' => ['required', 'email'],
			'threshold' => ['required', 'integer'],
			'default_freeze' => ['nullable', 'date'],
			'umt_percent' => ['required', 'integer', 'min:0', 'max: 65535'],
			'usdt_percent' => ['required', 'integer', 'min:0', 'max: 65535'],
		];
    }

    public function search(): array
    {
        return [];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

	protected function afterUpdated(Model $item)
	{
		cache()->forget('settings');
	}
}
