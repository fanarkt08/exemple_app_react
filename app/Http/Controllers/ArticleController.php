<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view("pages.article-details", [
            "id" => $id,
            "title" => $article?->title,
            "description" => $article?->description
        ]);
    }
    public function create()
    {
        $new_articles = [
            [
                'title' => 'L’IA soigne mieux',
                'description' => "L'intelligence artificielle aide les médecins à diagnostiquer plus vite."
            ],
            [
                'title' => 'Villes vertes',
                'description' => "Les métropoles deviennent plus écologiques et durables."
            ],
            [
                'title' => 'Télétravail',
                'description' => "Plus de liberté, mais aussi plus de solitude."
            ]
        ];

        foreach ($new_articles as $new_article){
            Article::create($new_article);
        }

        return redirect()->route("/");
    }
    public function edit($id)
    {
        $article = Article::find($id);

        if ($article) {
            $article->update([
                "title" => "Titre modifié",
                "description" => "Description modifiée"
            ]);

            return "Article modifié";
        }

        return "Article introuvable";
    }
    public function delete($id)
    {
        $article = Article::find($id);

        if ($article) {
            $article->delete();
        }

        return redirect()->route("/");
    }
}
