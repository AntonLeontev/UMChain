<?php

namespace App\MoonShine\Resources;

use App\Models\ReferralLink;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\ID;
use MoonShine\Fields\Number;
use MoonShine\Fields\Preview;
use MoonShine\Fields\Switcher;
use MoonShine\Resources\ModelResource;

class ReferralLinkResource extends ModelResource
{
    protected string $model = ReferralLink::class;

    protected string $title = 'Реф. ссылки';

    protected array $activeActions = ['edit'];

    protected array $with = ['user'];

    public function fields(): array
    {
        return [
            Flex::make([
                ID::make('Номер', 'id')->sortable(),
                Preview::make('Имя', 'user_id', fn ($item) => $item->user->name),
                Preview::make('Почта', 'user_id', fn ($item) => $item->user->email),
                Number::make('UMT %', 'umt_percent')
                    ->expansion('%'),
                Number::make('USDT %', 'usdt_percent')
                    ->expansion('%'),
                Switcher::make('Активна', 'is_active')
                    ->updateOnPreview(),
            ]),
            Preview::make('Переходов', '', fn ($item) => $item->loadCount('clicks')->clicks_count)
                ->hideOnForm(),
            Preview::make('Регистраций', '', fn ($item) => $item->user->loadCount('referrals')->referrals_count)
                ->hideOnForm(),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'umt_percent' => ['integer', 'min:0', 'max:5000'],
            'usdt_percent' => ['integer', 'min:0', 'max:5000'],
            'is_active' => ['boolean'],
        ];
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
            // FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
