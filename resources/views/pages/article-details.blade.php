@extends('layouts.app')

@section('title', 'Article ' . $article->id)

@section('content')
    <h2>Article portant l’identifiant {{ $article->id }}</h2>
    <h3>{{ $article->title }}</h3>
    <h3>{{ $article->description }}</h3>
@endsection