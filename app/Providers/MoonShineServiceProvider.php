<?php

namespace App\Providers;

use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\SettingResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\MoonShine;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([
            MenuGroup::make('moonshine::ui.resource.system', [
                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
                    ->translatable()
                    ->icon('users'),
                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
                    ->translatable()
                    ->icon('bookmark'),
            ])->translatable(),

            MenuItem::make('Заказы', new OrderResource())
                ->icon('heroicons.banknotes'),
            MenuItem::make('Настройки', new SettingResource())
                ->icon('heroicons.cog-8-tooth'),
        ]);
    }
}
