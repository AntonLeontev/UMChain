<?php

namespace App\Providers;

use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ReferralLinkResource;
use App\MoonShine\Resources\SettingResource;
use App\MoonShine\Resources\WithdrawalResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Menu\MenuDivider;
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
            // MenuGroup::make('moonshine::ui.resource.system', [
            //     MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
            //         ->translatable()
            //         ->icon('users'),
            //     MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
            //         ->translatable()
            //         ->icon('bookmark'),
            // ])->translatable(),

            MenuItem::make('Заказы', new OrderResource())
                ->icon('heroicons.banknotes'),
            MenuItem::make('Заявки на вывод USDT', new WithdrawalResource())
                ->icon('heroicons.arrow-uturn-up'),
            MenuItem::make('Реф ссылки', new ReferralLinkResource())
                ->icon('heroicons.link'),
			MenuItem::make('Баннеры', new BannerResource())
                ->icon('heroicons.photo'),
			MenuItem::make('Настройки', new SettingResource())
				->icon('heroicons.cog-8-tooth'),

			MenuDivider::make(),

			MenuItem::make('На сайт', '/')->icon('heroicons.home'),
        ]);
    }
}
