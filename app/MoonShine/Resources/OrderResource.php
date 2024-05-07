<?php

namespace App\MoonShine\Resources;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use MoonShine\ActionButtons\ActionButton;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Date;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Relationships\BelongsTo;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Text;
use MoonShine\Filters\DateRangeFilter;
use MoonShine\Filters\SwitchBooleanFilter;
use MoonShine\QueryTags\QueryTag;
use MoonShine\Resources\ModelResource;

class OrderResource extends ModelResource
{
    protected string $model = Order::class;

    protected string $title = 'Заказы';

    protected array $activeActions = [];

    protected array $with = ['user'];

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Пользователь', 'user')
                ->hideOnForm(),
            Preview::make('Пользователь', 'user_id', fn ($item) => User::find($item->user_id)->name),
            Number::make('USDT', 'usdt')->readonly(),
            Number::make('UMCT', 'umt')->readonly(),
            Text::make('Сеть', 'network'),
            Text::make('Кошелек', 'wallet')
                ->readonly()
                ->hideOnIndex()
                ->readonly(),
            Preview::make('Оплачен', 'is_paid')->boolean(hideTrue: false, hideFalse: false),
            Date::make('Дата оплаты', 'paid_at')
                ->readonly()
                ->format('d.m.Y H:i'),
            Switcher::make('Подтвержден', 'is_accepted')
                ->updateOnPreview(),
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
            // DateRangeFilter::make('Дата оплаты', 'paid_at'),
            // SwitchBooleanFilter::make('Оплачен', 'is_paid'),
            // SwitchBooleanFilter::make('Подтвержден', 'is_accepted'),
        ];
    }

    public function actions(): array
    {
        return [
            // FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

    public function itemActions(): array
    {
        return [
            ActionButton::make('Подтвердить', function (Model $item) {
                $item->update(['is_accepted' => true, 'is_viewed' => true]);
            }, 'Подтвержден')
                ->canSee(fn (Order $order) => ! $order->is_viewed),

            ActionButton::make('Отклонить', function (Model $item) {
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
