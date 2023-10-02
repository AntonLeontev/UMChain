<?php

namespace App\MoonShine\Resources;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\NoInput;
use MoonShine\Fields\Number;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Filters\DateRangeFilter;
use MoonShine\Filters\SwitchBooleanFilter;
use MoonShine\ItemActions\ItemAction;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\Resource;

class OrderResource extends Resource
{
    public static string $model = Order::class;

    public static string $title = 'Заказы';

    public static array $activeActions = [];

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Пользователь', 'user_id', 'email')
                ->hideOnForm(),
            NoInput::make('Пользователь', 'user_id', fn ($item) => User::find($item->user_id)->name),
            Number::make('USDT', 'usdt')->readonly(),
            Number::make('UMCT', 'umt')->readonly(),
            Text::make('Сеть', 'network'),
            Text::make('Кошелек', 'wallet')
                ->readonly()
                ->hideOnIndex()
                ->readonly(),
            NoInput::make('Оплачен', 'is_paid')->boolean(hideTrue: false, hideFalse: false),
            Date::make('Дата оплаты', 'paid_at')
                ->readonly()
                ->format('d.m.Y H:i'),
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
        return [
            DateRangeFilter::make('Дата оплаты', 'paid_at'),
            SwitchBooleanFilter::make('Оплачен', 'is_paid'),
            SwitchBooleanFilter::make('Подтвержден', 'is_accepted'),
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
            ItemAction::make('Подтвердить', function (Model $item) {
                $item->update(['is_accepted' => true, 'is_viewed' => true]);
            }, 'Подтвержден')
                ->canSee(fn (Order $order) => ! $order->is_viewed),

            ItemAction::make('Отклонить', function (Model $item) {
                $item->update(['is_viewed' => true]);
            }, 'Отклонен')
                ->canSee(fn (Order $order) => ! $order->is_viewed),
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
                'За сегодня',
                fn (Builder $query) => $query->where('paid_at', '>=', now()->startOfDay())
            )->icon('heroicons.bolt'),

            QueryTag::make(
                'Не обработаны',
                fn (Builder $query) => $query->where('is_viewed', false)
            )->icon('heroicons.bolt'),
        ];
    }
}
