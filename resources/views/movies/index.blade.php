<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- File CSS --}}
     <link rel="stylesheet" href="{{ asset( 'css/app.css' )}}">
     {{-- /File CSS --}}
    <title>All Movies List</title>
</head>
<body>

 <div class="container">
   
    @foreach ($movies as $movie)
    <div class="box-movie">
     <h2>Titolo: {{ $movie->title }}</h2>
     <span>Genere: {{ $movie->genre }}</span>
     <h3>Regia: {{ $movie->director }}</h3>
     <button><a href="{{route('movies.show', [ 'movie' => $movie->id ])}}">Preview</a></button>
    </div>
    @endforeach
 
</div>

</body>
</html>



