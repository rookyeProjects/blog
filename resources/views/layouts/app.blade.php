<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css') }}" >
    <title>Lista de usuarios</title>
</head>
<body>
        @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>

    <footer style="text-align: center;">
        <p>Copyright 2018 - </p>
    </footer>
</body>
</html>