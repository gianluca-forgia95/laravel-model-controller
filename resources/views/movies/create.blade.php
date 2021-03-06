@extends('layouts.main')

@section('title-page')
Add Movie
@endsection

@section('font')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&family=Lily+Script+One&display=swap" rel="stylesheet">
@endsection

@section('content')
{{-- Titolo Pagina --}}
   <h1>Aggiungi un Film</h1>
{{-- /Titolo Pagina --}}
{{-- Error Alert --}}
   @if ($errors->any())
   <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
{{-- /sError Alert --}}
<div class="container">
<form action="{{ route('movies.store')}}" method="POST">
    @method('POST')

    @csrf
    {{-- Title --}}
    <div class="form-group">
     <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Movie Title" value="{{ old('title')}}">
    </div>
    {{-- /Title --}}
    {{-- Img --}}
    <div class="form-group">
        <label for="img">Url Img</label>
         <input type="text" class="form-control" id="img" name="img" placeholder="Enter Url Img" value="{{ old('img')}}">
    </div>
     {{-- /Img --}}
    {{-- Director --}}
    <div class="form-group">
        <label for="director">Regista</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="Enter Movie Director" value="{{ old('director')}}">
    </div>
    {{-- /Director --}}
    {{-- Genre/Genres --}}
    <div class="form-group">
        <label for="genre">Generi</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre/Genres" value="{{ old('genre')}}">
    </div>
    {{--/ Genre/Genres --}}
    {{-- Description --}}
    <div class="form-group">
        <label for="description">Trama</label>
        <textarea class="form-control" id="description" name="description" rows="8">{{ old('description')}}</textarea>
    </div>
    {{-- /Description --}}
    {{-- Year Select --}}
    <div class="form-group">
        <select class="form-control" id="year" name="year">
            @for ($i = 1900; $i < date("Y") + 1; $i++)
              <option value="{{$i}}" {{ $i == old('year') ? 'selected' : '' }}>{{$i}}</option>
            @endfor
        </select>
    </div>
    {{-- /Year Select --}}
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
   