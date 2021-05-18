@extends('layouts.main')

@section('title-page')
Add Movie
@endsection

@section('font')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bangers&family=Lily+Script+One&display=swap" rel="stylesheet">
@endsection

@section('content')
   <h1>Aggiungi un Film</h1>
   @if ($errors->any())
   <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

<div class="container">
<form action="{{ route('movies.store')}}" method="POST">
    @method('POST')

    @csrf
    <div class="form-group">
     <label for="title">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Movie Title">
    </div>
    <div class="form-group">
        <label for="img">Url Img</label>
         <input type="text" class="form-control" id="img" name="img" placeholder="Enter Url Img">
    </div>
    
    <div class="form-group">
        <label for="director">Regista</label>
        <input type="text" class="form-control" id="director" name="director" placeholder="Enter Movie Director">
    </div>
    <div class="form-group">
        <label for="genre">Generi</label>
        <input type="text" class="form-control" id="genre" name="genre" placeholder="Enter Genre/Genres">
    </div>
    <div class="form-group">
        <label for="description">Trama</label>
        <textarea class="form-control" id="description" name="description" rows="8"></textarea>
    </div>
    <div class="form-group">
        <select class="form-control" id="year" name="year">
            @for ($i = 1900; $i < date("Y") + 1; $i++)
            <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
   