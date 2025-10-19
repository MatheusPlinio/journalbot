<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $categories = Category::all();

        foreach (range(1, 20) as $i) {
            $title = fake()->sentence(6);
            Article::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'summary' => fake()->paragraph(),
                'content' => fake()->paragraphs(5, true),
                'category_id' => $categories->random()->id,
                'published_at' => now()->subDays(rand(0, 7)),
            ]);
        }
    }
}
