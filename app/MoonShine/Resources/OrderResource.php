<?php

namespace App\MoonShine\Resources;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Resources\Resource;

class OrderResource extends Resource
{
	public static string $model = Order::class;

	public static string $title = 'Orders';

	public static array $activeActions = ['edit'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
			BelongsTo::make('Пользователь', 'user_id', 'email')
				->hideOnForm(),
			NoInput::make('Пользователь', 'user_id', fn($item) => User::find($item->user_id)->name),
			Number::make('USDT', 'usdt')->readonly(),
			Number::make('UMT', 'umt')->readonly(),
			Text::make('Кошелек', 'wallet')
				->readonly()
				->hideOnIndex(),
			Date::make('Заморожен до', 'freeze_to')
            	->format('d.m.Y'),
			NoInput::make('Оплачен', 'is_paid')->boolean(hideTrue: false, hideFalse: false),
			SwitchBoolean::make('Подтвержден', 'is_accepted')
				->autoUpdate(false),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id', 'usdt', 'umt'];
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
