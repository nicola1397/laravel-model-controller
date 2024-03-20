@extends('layouts.app')

@section('page_title', 'Movie')

@section('main')
    <div class="container my-3">
        <h2 class="fs-1 fw-bold">Titolo: {{ $movie->title }}</h2>
        <p class="py-3">Titolo Originale: {{ $movie->original_title }}</p>
        <p>Nazione: {{ $movie->nationality }}</p>
        <p>Data di uscita: {{ $movie->date }}</p>
        <p>Voto: {{ $movie->vote }}</p>
    </div>
@endsection