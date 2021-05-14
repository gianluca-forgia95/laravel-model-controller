<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Google Font --}}
    @yield('font')
     {{-- /Google Font --}}
     {{-- File CSS --}}
     <link rel="stylesheet" href="{{ asset( 'css/app.css' )}}">
     {{-- /File CSS --}}
    <title>@yield('title-page')</title>
</head>
<body>

@yield('content')

</body>
</html>