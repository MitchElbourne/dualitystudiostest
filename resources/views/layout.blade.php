<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Duality Studios Test</title>

        {{-- css --}}
        <link rel="stylesheet" type="text/css" href="./css/app.css">

    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
