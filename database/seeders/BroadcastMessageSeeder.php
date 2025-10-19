<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\BroadcastMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BroadcastMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();

        foreach ($articles->take(10) as $article) {
            BroadcastMessage::create([
                'article_id' => $article->id,
                'message_text' => "🗞️ *{$article->title}*\n\n{$article->summary}\n\nLeia mais: " . url("/articles/{$article->slug}"),
                'sent_at' => now()->subHours(rand(1, 24)),
            ]);
        }
    }
}
