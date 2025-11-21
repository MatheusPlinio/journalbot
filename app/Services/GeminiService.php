<?php

namespace App\Services;

use GuzzleHttp\Client;
use Log;

class GeminiService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = config("services.gemini.api_key");
        $this->baseUrl = config("services.gemini.base_url");
    }

    public function generateText(string $prompt, string $text = "")
    {
        try {
            $headers = [
                "x-goog-api-key" => $this->apiKey,
                "Content-Type" => "application/json",
            ];

            $fullPrompt = trim($prompt . "\n\n" . $text);

            $response = $this->client->post(
                "{$this->baseUrl}/gemini-2.5-flash:generateContent",
                [
                    "headers" => $headers,
                    "json" => [
                        "contents" => [
                            [
                                "parts" => [
                                    [
                                        "text" => $fullPrompt,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            );

            $data = json_decode($response->getBody(), true);

            return $data["candidates"][0]["content"]["parts"][0]["text"] ??
                null;
        } catch (\Exception $e) {
            Log::error("Gemini API Error (2.5 Flash): " . $e->getMessage());
            return null;
        }
    }
}
