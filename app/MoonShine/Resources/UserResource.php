<?php

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;

class UserResource extends Resource
{
    public static string $model = User::class;

    public static string $title = 'Пользователи';

    public static array $activeActions = ['show', 'edit'];

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Имя', 'name')
                ->hideOnForm()
                ->sortable(),
            Email::make('Почта', 'email')
                ->hideOnForm()
                ->sortable(),
            Text::make('UMCT', 'umt')->hideOnForm(),
            Text::make('USDT', 'usdt')->hideOnForm(),
            Text::make('ID агента', 'agent_id')
                ->hideOnForm()
                ->sortable(),
            Number::make('Коэффициент', 'token_coef')
                ->step(0.01),
            NoInput::make('TRON кошелёк', '', fn ($user) => $user->tronWallet?->address)
                ->hideOnForm()
                ->hideOnIndex(),
            NoInput::make('ETH кошелёк', '', fn ($user) => $user->ethWallet?->address)
                ->hideOnForm()
                ->hideOnIndex(),
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
