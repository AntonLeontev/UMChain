<?php

namespace App\Services\OpenAI;

class OpenAIService
{
    public function __construct(public OpenAIApi $api)
    {
    }

    public function complete(string $message, string $model = 'gpt-4')
    {
        $response = $this->api->completion($message, '', 1, presencePenalty: 1, frequencyPenalty: 1, model: $model);

        return $response->json();
    }

    public function completion(string $userMessage, string $systemMessage, int $n = 1, string $model = 'gpt-4'): array
    {
        $response = $this->api->completion($userMessage, $systemMessage, n: $n, model: $model);

        $choices = $response->json('choices');
        $results = [];

        foreach ($choices as $choice) {
            $content = $choice['message']['content'];

            $results[] = $content;
        }

        return $results;
    }

    public function generateMenu(int $fat, int $carbs, int $proteins, int $calories, ?string $menuType = null)
    {
        $messages = collect([__('openai.requests.menu', ['fats' => $fat, 'carbs' => $carbs, 'proteins' => $proteins])]);

        if (! is_null($menuType)) {
            $messages->push(__('openai.requests.add_menu_type', ['menu_type' => $menuType]));
        }

        $results = $this->completion($messages->join(' '), '');

        return $results[0];
    }
}
