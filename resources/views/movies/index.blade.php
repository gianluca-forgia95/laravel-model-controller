<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
</head>
<body>
   
   
    @foreach ($movies as $movie)
     <h2>Titolo: {{ $movie->title }}</h2>
     <span>Genere: {{ $movie->genre }}</span>
     <h3>Regia: {{ $movie->director }}</h3>
    @endforeach
</body>
</html>



