<?php

namespace App\Providers;

use App\MoonShine\Resources\BannerResource;
use App\MoonShine\Resources\OrderResource;
use App\MoonShine\Resources\ReferralLinkResource;
use App\MoonShine\Resources\SettingResource;
use App\MoonShine\Resources\UserResource;
use App\MoonShine\Resources\WithdrawalResource;
use MoonShine\Menu\MenuDivider;
use MoonShine\Menu\MenuItem;
use MoonShine\Providers\MoonShineApplicationServiceProvider;

class MoonShineServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function menu(): array
    {
        return [
            MenuItem::make('Пользователи', new UserResource())
                ->icon('heroicons.user-group'),
            // MenuItem::make('Заказы', new OrderResource())
            //     ->icon('heroicons.banknotes'),
            MenuItem::make('Заявки на вывод', new WithdrawalResource())
                ->icon('heroicons.arrow-uturn-up'),
            MenuItem::make('Реф ссылки', new ReferralLinkResource())
                ->icon('heroicons.link'),
            // MenuItem::make('Баннеры', new BannerResource())
            //     ->icon('heroicons.photo'),
            MenuItem::make('Настройки', new SettingResource())
                ->icon('heroicons.cog-8-tooth'),

            MenuDivider::make(),

            MenuItem::make('На сайт', '/')->icon('heroicons.home'),
        ];
    }

    public function boot(): void
    {
        parent::boot();

        moonshineAssets()->add(['/vendor/moonshine/assets/minimalistic.css']);

        moonshineColors()
            ->primary('#1E96FC')
            ->secondary('#1D8A99')
            ->body('255, 255, 255')
            ->dark('30, 31, 67', 'DEFAULT')
            ->dark('249, 250, 251', 50)
            ->dark('243, 244, 246', 100)
            ->dark('229, 231, 235', 200)
            ->dark('209, 213, 219', 300)
            ->dark('156, 163, 175', 400)
            ->dark('107, 114, 128', 500)
            ->dark('75, 85, 99', 600)
            ->dark('55, 65, 81', 700)
            ->dark('31, 41, 55', 800)
            ->dark('17, 24, 39', 900)
            ->successBg('209, 255, 209')
            ->successText('15, 99, 15')
            ->warningBg('255, 246, 207')
            ->warningText('92, 77, 6')
            ->errorBg('255, 224, 224')
            ->errorText('81, 20, 20')
            ->infoBg('196, 224, 255')
            ->infoText('34, 65, 124');

        moonshineColors()
            ->body('27, 37, 59', dark: true)
            ->dark('83, 103, 132', 50, dark: true)
            ->dark('74, 90, 121', 100, dark: true)
            ->dark('65, 81, 114', 200, dark: true)
            ->dark('53, 69, 103', 300, dark: true)
            ->dark('48, 61, 93', 400, dark: true)
            ->dark('41, 53, 82', 500, dark: true)
            ->dark('40, 51, 78', 600, dark: true)
            ->dark('39, 45, 69', 700, dark: true)
            ->dark('27, 37, 59', 800, dark: true)
            ->dark('15, 23, 42', 900, dark: true)
            ->successBg('17, 157, 17', dark: true)
            ->successText('178, 255, 178', dark: true)
            ->warningBg('225, 169, 0', dark: true)
            ->warningText('255, 255, 199', dark: true)
            ->errorBg('190, 10, 10', dark: true)
            ->errorText('255, 197, 197', dark: true)
            ->infoBg('38, 93, 205', dark: true)
            ->infoText('179, 220, 255', dark: true);
    }
}
