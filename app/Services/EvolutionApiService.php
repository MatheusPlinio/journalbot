<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EvolutionApiService
{
    protected string $baseUrl;
    protected string $apiKey;
    protected string $instance;

    public function __construct(?string $instance = null)
    {
        $this->baseUrl = config("services.evolution.base_url");
        $this->apiKey = config("services.evolution.api_key");
        $this->instance = $instance ?? config("services.evolution.instance");
    }

    public function sendText(string $number, string $message): bool
    {
        try {
            $number = preg_replace("/\D/", "", $number);

            $response = Http::withHeaders([
                "Content-Type" => "application/json",
                "apikey" => $this->apiKey,
            ])->post("{$this->baseUrl}/message/sendText/{$this->instance}", [
                "number" => $number,
                "text" => $message,
            ]);

            if ($response->failed()) {
                Log::error("Falha ao enviar mensagem WhatsApp", [
                    "number" => $number,
                    "error" => $response->json(),
                ]);
                return false;
            }

            Log::info("Mensagem enviada com sucesso via WhatsApp", [
                "number" => $number,
                "response" => $response->json(),
            ]);

            return true;
        } catch (\Throwable $e) {
            Log::error("Erro ao enviar mensagem WhatsApp", [
                "number" => $number,
                "exception" => $e->getMessage(),
            ]);
            return false;
        }
    }
}
