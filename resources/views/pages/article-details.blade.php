@extends('layouts.app')

@section('title', 'Article ' . $article->id)

@section('content')
    <h2>Article portant l’identifiant {{ $article->id }}</h2>

    <x-article 
        :title="$article->title"
        :description="$article->description"
    />
@endsection