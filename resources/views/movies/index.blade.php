@extends('layouts.main')

@section('title-page')
Movie
@endsection
@section('font')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&family=Lily+Script+One&display=swap" rel="stylesheet">
    
@endsection

@section('content')

<h1>My Movie Selection</h1>
 <div class="container">
   
    @foreach ($movies as $movie)
    <div class="box-movie">
    <img src="{{ $movie->img }}" alt="{{ $movie->title }}">
     <h2>Titolo: {{ $movie->title }}</h2>
     <span>Genere: {{ $movie->genre }}</span>
     <h3>Regia: {{ $movie->director }}</h3>
     <button><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Preview</a></button>
    </div>
    @endforeach
 
</div>

@endsection





