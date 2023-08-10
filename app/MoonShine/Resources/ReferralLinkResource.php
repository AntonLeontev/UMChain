<?php

namespace App\MoonShine\Resources;

use App\Models\ReferralLink;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
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

	public static array $with = ['user'];

	public function fields(): array
	{
		return [
			Flex::make([
				ID::make('Номер', 'id')->sortable(),
				NoInput::make('Имя', 'user_id', fn($item) => $item->user->name),
				NoInput::make('Почта', 'user_id', fn($item) => $item->user->email),
				Number::make('UMT %', 'umt_percent')
					->expansion('%'),
				Number::make('USDT %', 'usdt_percent')
					->expansion('%'),
				SwitchBoolean::make('Активна', 'is_active')
					->autoUpdate(true),
			]),
			NoInput::make('Переходов', '', fn($item) => $item->loadCount('clicks')->clicks_count)
				->hideOnForm(),
			NoInput::make('Регистраций', '', fn($item) => $item->user->loadCount('referrals')->referrals_count)
				->hideOnForm(),
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
