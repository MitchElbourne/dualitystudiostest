<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Duality Studios Test</title>

        {{-- css --}}
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    </head>
    <body>
        
        <div class="container">
            @yield('content')
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>
