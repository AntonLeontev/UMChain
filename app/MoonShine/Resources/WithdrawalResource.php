<?php

namespace App\MoonShine\Resources;

use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Filters\DateRangeFilter;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;

class WithdrawalResource extends ModelResource
{
    protected string $model = Withdrawal::class;

    protected string $title = 'Заявки на вывод';

    protected array $with = ['user'];

    public function fields(): array
    {
        return [
            Flex::make([
                BelongsTo::make('Пользователь', 'user', fn ($item) => $item->email, new UserResource)->hideOnForm(),
                Preview::make('Кошелек (tron)', 'wallet'),
                Preview::make('Сумма', '', fn ($item) => "$item->amount UMCT"),
                Preview::make('Создана', '', fn ($item) => $item->created_at->translatedFormat('d.m.Y H:i')),
                Switcher::make('Выплачено', 'is_sent'),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }

    public function search(): array
    {
        return ['amount'];
    }

    public function filters(): array
    {
        return [
            // DateRangeFilter::make('Создано', 'created_at'),
        ];
    }

    public function actions(): array
    {
        return [];
    }

    public function queryTags(): array
    {
        return [
            QueryTag::make(
                'Все',
                fn (Builder $query) => $query
            )->icon('heroicons.bolt'),

            QueryTag::make(
                'Не выплаченные',
                fn (Builder $query) => $query->where('is_sent', false)
            )->icon('heroicons.bolt'),
        ];
    }

    public function getActiveActions(): array
    {
        return ['view'];
    }

    public function indexButtons(): array
    {
        return [
            ActionButton::make('', fn ($item) => route('moonshine.withdrawals.mark-sent', $item->id))
                ->withConfirm(
                    'Уверены?',
                    'Пометить заявку выплаченной? Это действие необратимо',
                    'Отметить выплаченной',
                )
                ->canSee(fn (Model $item) => ! $item->is_sent)
                ->icon('heroicons.check')
                ->primary()
                ->customAttributes(['title' => 'Пометить выплаченной']),
        ];
    }
}
