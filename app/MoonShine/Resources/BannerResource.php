<?php

namespace App\MoonShine\Resources;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Model;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Image;
use MoonShine\Fields\Switcher;
use MoonShine\Fields\Url;
use MoonShine\Resources\ModelResource;

class BannerResource extends ModelResource
{
    protected string $model = Banner::class;

    protected string $title = 'Баннеры';

    public function fields(): array
    {
        return [
            Flex::make([

                Image::make('Баннер', 'image')
                    ->hint('Размер фото не более 1024кб')
                    ->dir('banners')
                    ->disk('public')
                    ->allowedExtensions(['jpg', 'gif', 'png', 'webp', 'jpeg']),
                Url::make('Ссылка на лендинг', 'url')
                    ->required()
                    ->copy(),
                Switcher::make('Активен', 'is_active')
                    ->default(true),
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [
            'image' => ['image', 'max:1024'],
            'url' => ['required', 'string', 'max:255'],
            'is_active' => ['boolean'],
        ];
    }

    public function search(): array
    {
        return ['url'];
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

    protected function afterCreated(Model $item): Model
    {
        cache()->forget('banners');

        return $item;
    }

    protected function afterUpdated(Model $item): Model
    {
        cache()->forget('banners');

        return $item;
    }

    protected function afterDeleted(Model $item): Model
    {
        cache()->forget('banners');

        return $item;
    }

    protected function afterMassDeleted(array $ids): void
    {
        cache()->forget('banners');
    }
}
