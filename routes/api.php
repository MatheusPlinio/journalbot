<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\PixPaymentController;
use App\Http\Controllers\Api\PlanController;
use App\Http\Controllers\Api\MercadoPagoWebhookController;
use App\Http\Controllers\Api\WhatsappWebhook;
use Illuminate\Support\Facades\Route;

Route::post("/register", [AuthController::class, "register"])->name(
    "next.register",
);
Route::post("/login", [AuthController::class, "login"])->name("next.login");
Route::post("/logout", [AuthController::class, "logout"])->name("next.logout");

Route::post("/webhook/mercadopago", [MercadoPagoWebhookController::class, "handle"])->name("webhook.mercadopago");

Route::prefix("/v1")->group(function () {
    Route::get("/plans", [PlanController::class, "index"])->name("plan.index");

    Route::get("/plans/{id}", [PlanController::class, "show"])->name(
        "plan.show",
    );
    Route::post("/pix_generate", [PixPaymentController::class, "create"])
        ->middleware("auth:sanctum")
        ->name("pix.create");

    Route::post("/webhook/send-messages", [WhatsappWebhook::class, 'sendMessage'])
        ->middleware("auth:sanctum")
        ->name("webhook.send-messages");
});