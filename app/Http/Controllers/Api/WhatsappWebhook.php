<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendWhatsappNews;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class WhatsappWebhook extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            "title" => "required",
            "source" => "required",
            "category" => "required",
            "link" => "required",
            "description" => "required",
            "pubDate" => "required",
        ]);

        $category = Category::where('name', $data['category'])->first();

        if (!$category) {
            return response()->json(['error' => 'Categoria não encontrada'], 404);
        }

        User::activeClients()
            ->whereHas(
                'categories',
                fn($q) =>
                $q->where('categories.id', $category->id)
            )
            ->chunk(100, function ($clients) use ($data) {
                foreach ($clients as $client) {
                    SendWhatsappNews::dispatch($client, $data);
                }
            });

        return response()->json(['status' => 'queued']);
    }
}
