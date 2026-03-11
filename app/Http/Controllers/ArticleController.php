<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        if ($article){
            return view("pages.article-details", [
                'article' => $article
            ]);
        }

        return "Article introuvable";
    }
    public function create()
    {
        $newArticles = [
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

        foreach ($newArticles as $newArticle){
            Article::create($newArticle);
        }

        return "Articles créés";
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

        return "Article supprimer";
    }
}
