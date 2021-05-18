@extends('layouts.main')

@section('title-page')
{{ $movie->title }}
@endsection

@section('font')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&family=Lily+Script+One&display=swap" rel="stylesheet">
@endsection
@section('content')

<div class="container">
{{-- Film Description --}}
   <div class="box-descr">
      <h2>{{ $movie->title }}</h2>
      <p>{{ $movie->description }}</p>
      <button class="btn btn-primary"><a href="{{route('movies.index')}}">Back To HomePage</a></button>
   </div>
{{-- Film Description --}}
</div>

@endsection
   
    
