<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- File CSS --}}
     <link rel="stylesheet" href="{{ asset( 'css/app.css' )}}">
     {{-- /File CSS --}}
    <title>Movie</title>
</head>
<body>
    <div class="container">
      <div class="box-descr">
        <h2>{{ $movie->title }}</h2>
        <p>{{ $movie->description }}</p>
        <button><a href="{{route('movies.index')}}">Back To HomePage</a></button>
     </div>
    </div>
    
</body>
</html>