@extends('layouts.main')

@section('title-page')
All Movies
@endsection
@section('font')

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&family=Lily+Script+One&display=swap" rel="stylesheet">
    
@endsection

@section('content')

<h1>My Movie Selection</h1>
<div class="link-create text-center mt-3">
  <a href="{{ route('movies.create')}}"><button type="button" class="btn btn-success">Add Movie</button></a>
</div>
@if (session('message'))
    <div class="alert alert-success destroy-complete">
        {{ session('message') }}
    </div>
@endif
 <div class="container">
{{-- Movie Box --}}
@foreach ($movies as $movie)
<div class="box-movie">
     <img src="{{ $movie->img }}" alt="{{ $movie->title }}">
     <h2>Titolo: {{ $movie->title }}</h2>
     <span>Genere: {{ $movie->genre }}</span>
     <h3>Regia: {{ $movie->director }}</h3>
     <span>Anno: {{ $movie->year }}</span>
     <button class="btn btn-primary"><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Preview</a></button>
     <button class="btn btn-secondary"><a href="{{route('movies.edit', [ 'movie' => $movie->id ])}}">Edit</a></button>
     {{-- Destroy Btn --}}
     <form class="dng" action="{{route('movies.destroy', [ 'movie' => $movie->id ])}}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Remove Movie</button>
     </form>
     {{-- /Destroy Btn --}}
</div>
@endforeach
{{-- /Movie Box --}}
</div>



@endsection





