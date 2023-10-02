<?php

namespace App\MoonShine\Resources;

use App\Models\Withdrawal;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Filters\DateRangeFilter;
use MoonShine\ItemActions\ItemAction;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\Resource;

class WithdrawalResource extends Resource
{
    public static string $model = Withdrawal::class;

    public static string $title = 'Заявки на вывод USDT';

    public static array $activeActions = [];

    public function fields(): array
    {
        return [
            Flex::make([
                NoInput::make('Сеть', 'network'),
                NoInput::make('Кошелек', 'wallet'),
                NoInput::make('Сумма', '', fn ($item) => "$item->amount USDT"),
                NoInput::make('Создана', '', fn ($item) => $item->created_at->translatedFormat('d.m.Y H:i')),
                SwitchBoolean::make('Выплачено', 'is_sent')
                    ->autoUpdate(false),
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
            DateRangeFilter::make('Создано', 'created_at'),
        ];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function itemActions(): array
    {
        return [
            ItemAction::make('Пометить выплаченным', function (Model $item) {
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
