<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" >

        
    </head>
    <body>
        @yield('content')

        <div class="nav" >
            <ul>
                <li><a href='/'>HOME</a></li>
                <li><a href='/test'>TEST</a></li>
            </ul>
        </div>
    </body>
</html>