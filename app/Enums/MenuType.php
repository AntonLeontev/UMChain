<?php

namespace App\Enums;

enum MenuType: int
{
    case usual = 0;
    case vegetarian = 1;
    case fish = 2;
    case halal = 3;

    public function toAIRequest(): string
    {
        return match ($this) {
            self::usual => '',
            self::vegetarian => __('openai.requests.add_menu_type', ['menu_type' => __('openai.requests.type.1')]),
            self::fish => __('openai.requests.add_menu_type', ['menu_type' => __('openai.requests.type.2')]),
            self::halal => __('openai.requests.add_menu_type', ['menu_type' => __('openai.requests.type.3')]),
        };
    }
}
