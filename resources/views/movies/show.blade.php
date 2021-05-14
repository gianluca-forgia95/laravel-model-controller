@extends('layouts.main')

@section('title-page')
Movie
@endsection

@section('font')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&display=swap" rel="stylesheet"> 
@endsection
@section('content')

<div class="container">
    <div class="box-descr">
      <h2>{{ $movie->title }}</h2>
      <p>{{ $movie->description }}</p>
      <button><a href="{{route('movies.index')}}">Back To HomePage</a></button>
   </div>
</div>

@endsection
   
    
