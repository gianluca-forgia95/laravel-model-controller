<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film</title>
</head>
<body>
    <h1>Ciao</h1>
    @foreach ($movies as $movie)
     <h2>{{ $movie->title }}</h2>
        
    @endforeach
</body>
</html>