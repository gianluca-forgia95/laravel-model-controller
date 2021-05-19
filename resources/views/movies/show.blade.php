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
{{-- Alert Film salvato --}}
@if (session('success'))
   <div class="alert alert-success">
       {{ session('success') }}
   </div>
@endif
{{-- /Alert Film salvato --}}
{{-- Alert film modificato --}}
@if (session('edit'))
   <div class="alert alert-success">
       {{ session('edit') }}
   </div>
@endif
{{-- /Alert film modificato --}}
{{-- Film Description --}}
   <div class="box-descr">
      <h2>{{ $movie->title }}</h2>
      <p>{{ $movie->description }}</p>
      <button class="btn btn-primary"><a href="{{route('movies.index')}}">Back To HomePage</a></button>
   </div>
{{-- Film Description --}}
</div>

@endsection
   
    
