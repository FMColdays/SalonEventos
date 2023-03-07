<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>Inicio</title>
</head>

<body>

    <nav class="navbar">
        <div class="navbarC">
            <a><img class="logo" src="imagenes/logo.png"></a>
            <ul>
                @if (Route::currentRouteName() != 'login')
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Agenda</a></li>
                    <li><a href="">Eventos</a></li>
                    @if (Route::currentRouteName() != 'sesion')
                        <li><a href="{{ route('login') }}"> Iniciar sesion</a></li>
                    @endif
                @endif
            </ul>
        </div>
    </nav>
    @yield('cuerpo')
</body>

</html>
