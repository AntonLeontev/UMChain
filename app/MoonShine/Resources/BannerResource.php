<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Banner;

use MoonShine\Resources\Resource;
use MoonShine\Fields\Image;
use MoonShine\Actions\FiltersAction;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Url;

class BannerResource extends Resource
{
	public static string $model = Banner::class;

	public static string $title = 'Баннеры';

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
				SwitchBoolean::make('Активен', 'is_active')
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
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }

	protected function afterCreated(Model $item)
	{
		cache()->forget('banners');
	}

	protected function afterUpdated(Model $item)
	{
		cache()->forget('banners');
	}

	protected function afterDeleted(Model $item)
	{
		cache()->forget('banners');
	}

	protected function afterMassDeleted(array $ids)
	{
		cache()->forget('banners');
	}
}
