<?php

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Пользователи';

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
            Text::make('TRON кошелёк', '', fn ($user) => $user->tronWallet?->address)
                ->hideOnForm()
                ->hideOnIndex(),
            Text::make('ETH кошелёк', '', fn ($user) => $user->ethWallet?->address)
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
        return [];
    }

    public function getActiveActions(): array
    {
        return ['view', 'update'];
    }
}
