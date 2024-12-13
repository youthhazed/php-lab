<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = json_decode(file_get_contents(public_path().'artciles.json'));
        foreach ($articles as $article) {
            Article::create([
                'name'=> $article-> name,
                'desc' => $article->desc,
                'date' => $article->date,
                'user_id'=> (random_int(1, 10))
            ]);
        }
    }
}
