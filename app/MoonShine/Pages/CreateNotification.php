<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\User;
use MoonShine\Components\FormBuilder;
use MoonShine\Components\Layout\Flash;
use MoonShine\Components\MoonShineComponent;
use MoonShine\Decorations\Flex;
use MoonShine\Fields\Select;
use MoonShine\Fields\TinyMce;
use MoonShine\Pages\Page;

class CreateNotification extends Page
{
    /**
     * @return array<string, string>
     */
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title(),
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'CreateNotification';
    }

    /**
     * @return list<MoonShineComponent>
     */
    public function components(): array
    {
        return [
            FormBuilder::make(
                action: route('moonshine.notificate'),
                method: 'POST',
                fields: [
                    Flash::make('notification_sent', 'success', false, false),
                    Select::make('Пользователь', 'user_id')
                        ->options(
                            User::get(['id', 'email'])
                                ->pluck('email', 'id')
                                ->prepend('Всем пользователям', 'all')
                                ->all()
                        )
                        ->multiple()
                        ->searchable()
                        ->required(),
                    Flex::make([
                        TinyMce::make('Текст на русском', 'text_ru')
                            ->toolbar('undo redo | bold italic underline | link | removeformat')
                            ->menubar('')
                            ->required(),
                        TinyMce::make('Текст на английском', 'text_en')
                            ->toolbar('undo redo | bold italic underline | link | removeformat')
                            ->menubar(''),
                    ]),
                ],
            )
                ->submit('Отправить', ['class' => 'btn-primary']),

        ];
    }
}
