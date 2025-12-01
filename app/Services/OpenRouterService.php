<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Log;

class OpenRouterService
{
    protected string $url;
    protected string $apiKey;

    public function __construct()
    {
        $this->url = config('services.openrouter.url');
        $this->apiKey = config('services.openrouter.key');
    }

    public function generateText(string $prompt, string $text = ""): ?string
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->apiKey,
                'HTTP-Referer' => config('app.url'),
                'X-Title' => config('app.name'),
                'Content-Type' => 'application/json',
            ])->post($this->url, [
                        'model' => 'google/gemma-3-27b-it:free',
                        'messages' => [
                            [
                                'role' => 'user',
                                'content' => $prompt . "\n\n" . $text,
                            ],
                        ],
                    ]);

            if ($response->failed()) {
                Log::error("OpenRouter API Error: " . $response->body());
                return null;
            }

            $data = $response->json();

            return $data['choices'][0]['message']['content'] ?? null;
        } catch (\Exception $e) {
            Log::error("OpenRouter Service Exception: " . $e->getMessage());
            return null;
        }
    }
}
