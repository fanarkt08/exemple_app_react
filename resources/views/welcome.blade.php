@extends('layouts.app')

@section('title', 'Accueil')
@section('content')
    <h2>Bienvenue sur le site de {{ $name }}</h2>
    @foreach($articles as $article)

        @if($loop->last)
            @break
        @endif

        <x-article 
            :title="$article['title']"
            :description="\Illuminate\Support\Str::limit($article['description'], 30)"
        />

    @endforeach
@endsection