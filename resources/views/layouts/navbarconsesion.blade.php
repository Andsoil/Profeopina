<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/navbarsinsesion.css">
    <link rel="icon" href="/logos/Logo_icon.svg" type="image/png">
</head>
<body>
    <header class="header">
        <div class="left-section">
            <div class="logo">
                <label for="btn-menu">
                    <img src="/imagenes/menu.png" alt="profeopina">
                </label>
            </div>
            <div class="prof">
                <img src="/logos/Logo_title_alt3.svg" alt="profeopina">
            </div>
        </div>
        <nav class="right-section">
            <div class="logo">
                <img src="/imagenes/traducir.png" alt="profeopina">
            </div>
            <div class="logo" >
                <a href="https://www.facebook.com/profile.php?id=61557749877856"><img src="/imagenes/facebook.png" alt="profeopina"></a>

            </div>
        </nav>
    </header>
    @yield('content')
    <!--barra lateral  -->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="{{route('iniciologueado')}}">Inicio</a>
                <a href="{{route('tuperfil')}}">Perfil</a>
                <a href="" class="btn btn-outline-danger">Tus reseñas</a>
                <a href="" class="btn btn-outline-danger">Profesores guardados</a>
                <a href="" class="btn btn-outline-danger">Configuraciones de la cuenta</a>
                <a href="">Contáctanos</a>
                <a href="">Cerrar sesion</a>
            </nav>
            <div>
                <label for="btn-menu" class=icon-equis>
                    <img src="/imagenes/xazul.png" alt="x">
                </label>
            </div>
        </div>



    </div>
