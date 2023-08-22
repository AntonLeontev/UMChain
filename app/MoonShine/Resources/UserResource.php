<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Email;
use MoonShine\Fields\Text;

class UserResource extends Resource
{
	public static string $model = User::class;

	public static string $title = 'Пользователи';

	public static array $activeActions = ['show'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
			Text::make('Имя', 'name')
				->sortable(),
			Email::make('Почта', 'email')
				->sortable(),
			Text::make('UMCT', 'umt'),
			Text::make('USDT', 'usdt'),
			Text::make('ID агента', 'agent_id')
				->sortable(),
        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id', 'email', 'name'];
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
