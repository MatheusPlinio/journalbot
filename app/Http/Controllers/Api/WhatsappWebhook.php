<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\SendWhatsappNews;
use App\Models\Category;
use App\Models\Source;
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
        $source = Source::where('name', $data['source'])->first();

        if (!$category) {
            return response()->json(['error' => 'Categoria não encontrada'], 404);
        }

        if (!$source) {
            return response()->json(['error' => 'Fonte não encontrada'], 404);
        }

        User::activeClients()
            ->whereHas('categories', function ($q) use ($category) {
                $q->where('categories.id', $category->id);
            })
            ->whereHas('sources', function ($q) use ($source) {
                $q->where('sources.id', $source->id);
            })
            ->chunk(100, function ($clients) use ($data) {
                foreach ($clients as $client) {
                    SendWhatsappNews::dispatch($client, $data);
                }
            });

        return response()->json(['status' => 'queued']);
    }
}
