<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    "postmark" => [
        "token" => env("POSTMARK_TOKEN"),
    ],

    "resend" => [
        "key" => env("RESEND_KEY"),
    ],

    "ses" => [
        "key" => env("AWS_ACCESS_KEY_ID"),
        "secret" => env("AWS_SECRET_ACCESS_KEY"),
        "region" => env("AWS_DEFAULT_REGION", "us-east-1"),
    ],

    "slack" => [
        "notifications" => [
            "bot_user_oauth_token" => env("SLACK_BOT_USER_OAUTH_TOKEN"),
            "channel" => env("SLACK_BOT_USER_DEFAULT_CHANNEL"),
        ],
    ],
    "evolution" => [
        "base_url" => env("EVOLUTION_BASE_URL", "http://localhost:8081"),
        "api_key" => env("EVOLUTION_API_KEY"),
        "instance" => env("EVOLUTION_INSTANCE", "journal"),
    ],
    "mercadopago" => [
        "token" => env("TOKEN_API_MERCADOPAGO", ""),
        "sandbox" => env("MERCADOPAGO_SANDBOX", false),
        "webhook_secret" => env("MERCADOPAGO_WEBHOOK_SECRET")
    ],
    "pix" => [
        "key" => env("KEY_PIX", ""),
    ],
    "gemini" => [
        "api_key" => env("GEMINI_API_KEY"),
        "base_url" => env(
            "GEMINI_BASE_URL",
            "https://generativelanguage.googleapis.com/v1beta/models/",
        ),
    ],
    "openrouter" => [
        "url" => env("OPENROUTER_BASE_URL", "https://openrouter.ai/api/v1/chat/completions"),
        "key" => env("OPENROUTER_API_KEY"),
    ],
    "webhook_n8n" => [
        "url" => env("WEBHOOK_N8N_BASE_URL", "https://n8n.matheusdevdeploy.shop/webhook-test/news"),
        "token" => env("WEBHOOK_N8N_API_TOKEN"),
    ],
];
