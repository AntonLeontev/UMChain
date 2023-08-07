<?php

namespace App\MoonShine\Resources;

use App\Models\ReferralLink;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\ID;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\Number;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Resources\Resource;

class ReferralLinkResource extends Resource
{
	public static string $model = ReferralLink::class;

	public static string $title = 'Реф. ссылки';

	public static array $activeActions = ['edit'];

	public function fields(): array
	{
		return [
		    ID::make('Номер', 'id')->sortable(),
			NoInput::make('Имя', 'user_id', fn($item) => $item->user->name),
			NoInput::make('Почта', 'user_id', fn($item) => $item->user->email),
			Number::make('UMT %', 'umt_percent'),
			Number::make('USDT %', 'usdt_percent'),
			SwitchBoolean::make('Активна', 'is_active')
				->autoUpdate(true),
			NoInput::make('Переходов', '', fn($item) => $item->loadCount('clicks')->clicks_count),
			NoInput::make('Регистраций', '', fn($item) => $item->user->loadCount('referrals')->referrals_count),
        ];
	}

	public function rules(Model $item): array
	{
	    return [
			'umt_percent' => ['integer', 'min:0', 'max:5000'],
			'usdt_percent' => ['integer', 'min:0', 'max:5000'],
			'is_active' => ['boolean'],
		];
    }

    public function search(): array
    {
        return ['id'];
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
}
