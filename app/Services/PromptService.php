<?php

namespace App\Services;

use App\Models\Category;

class PromptService
{
    public function getPromptForCategory(
        Category $category,
        string $type = "summary",
    ) {
        $prompt = $category->prompts()->where("type", $type)->first();

        if ($prompt) {
            return $prompt->prompt;
        }

        return $this->defaultPrompt($type);
    }

    private function defaultPrompt(string $type)
    {
        return match ($type) {
            "summary"
            => "Resuma o texto abaixo em até 3 frases, mantendo os fatos principais:",
            "title" => "Gere um título curto e direto para o texto abaixo:",
            "whatsapp"
            => "Transforme o texto abaixo em uma mensagem curta e clara para WhatsApp:",
            default => "Resuma o texto abaixo:",
        };
    }
}
