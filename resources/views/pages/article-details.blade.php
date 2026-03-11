@extends('layouts.app')

@section('title', 'Article {{ $id }}')
@section('content')
    <h2>Article portant l’identifiant {{ $id }}</h2>
    <h3>{{ $article->$title }}</h3>
    <h3>{{ $$article->$description }}</h3>
@endsection