<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Withdrawal;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\SwitchBoolean;

class WithdrawalResource extends Resource
{
	public static string $model = Withdrawal::class;

	public static string $title = 'Заявки на вывод USDT';

	public static array $activeActions = ['edit'];

	public function fields(): array
	{
		return [
			NoInput::make('Сеть', 'network'),
			NoInput::make('Кошелек', 'wallet'),
			NoInput::make('Сумма', '', fn($item) => "$item->amount USDT"),
			NoInput::make('Создана', '', fn($item) => $item->created_at->translatedFormat('d.m.Y H:i')),
			SwitchBoolean::make('Выплачено', 'is_sent')
				->autoUpdate(false),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
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
