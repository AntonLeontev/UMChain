<?php

namespace App\MoonShine\Resources;

use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Switcher;
use MoonShine\Filters\DateRangeFilter;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;

class WithdrawalResource extends ModelResource
{
    protected string $model = Withdrawal::class;

    protected string $title = 'Заявки на вывод USDT';

    protected array $activeActions = [];

    public function fields(): array
    {
        return [
            Flex::make([
                Preview::make('Сеть', 'network'),
                Preview::make('Кошелек', 'wallet'),
                Preview::make('Сумма', '', fn ($item) => "$item->amount USDT"),
                Preview::make('Создана', '', fn ($item) => $item->created_at->translatedFormat('d.m.Y H:i')),
                Switcher::make('Выплачено', 'is_sent')
                    ->updateOnPreview(),
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

    public function itemActions(): array
    {
        return [
            ActionButton::make('Пометить выплаченным', function (Model $item) {
                $item->update(['is_sent' => true]);
            }, 'Выплачен')
                ->canSee(fn (Model $item) => ! $item->is_sent),
        ];
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
}
