<?php

namespace App\MoonShine\Resources;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Fields\Email;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Resources\ModelResource;

class UserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Пользователи';

    protected array $with = [
        'agent',
    ];

    public function query(): Builder
    {
        return parent::query()
            ->withCount('referrals')
            ->withSum(
                ['calorySpends' => fn ($q) => $q->whereBetween('created_at', [now()->startOfDay(), now()->endOfDay()])],
                'calories'
            );
    }

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
            Text::make('UMCT', 'umt')
                ->hideOnForm()
                ->sortable(),
            Text::make('Заморожено', 'umt_frozen')->hideOnForm(),
            BelongsTo::make('Агент', 'agent', fn (User $user) => $user->email, new UserResource)
                ->hideOnForm()
                ->sortable(),
            Number::make('Коэффициент', 'token_coef')
                ->sortable()
                ->step(0.01),
            Text::make('Кол-во рефералов', 'referrals_count')
                ->hideOnForm()
                ->sortable(),
            Text::make('Калории вчера', 'calory_spends_sum_calories')
                ->hideOnForm()
                ->sortable(),
            Switcher::make('Разрешен вывод', 'is_enabled_withdraw')
                ->updateOnPreview(),
            Text::make('TRON кошелёк', '', fn ($user) => $user->tronWallet?->address)
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
