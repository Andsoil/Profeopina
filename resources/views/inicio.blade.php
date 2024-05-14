<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="icon" href="/logos/Logo_icon.svg" type="image/png">
    <title>ProfeOpina</title>
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
                <img src="/imagenes/twitter.png" alt="profeopina">
            </div>
            <div class="logo" >
                <a href="https://www.facebook.com/profile.php?id=61557749877856"><img src="/imagenes/facebook.png" alt="profeopina"></a>

            </div>
        </nav>
    </header>
    <div class="centered-images">
        <div>
            <h1>BIENVENIDO A</h1>
        </div>
        <div>
            <img src="/logos/Logo_subtitle.svg" alt="logo">
            <div class="icon">
                <img src="/logos/Logo_icon.svg" alt="logo">
            </div>
        </div>
    </div>
    <div class="search-section">
        <form action="/buscar_profesor" method="GET">
            <input type="text" name="profesor" placeholder="Buscar profesor" class="search-input">

        </form>
    </div>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="a">Inicio</a>
                <a href="{{route('login')}}" class="btn btn-outline-danger">Iniciar sesión</a>
                <a href="{{route('register')}}" class="btn btn-outline-danger">Registrarse</a>
                <a href="a">Contáctanos</a>
            </nav>
            <div>
                <label for="btn-menu" class=icon-equis>
                    <img src="/imagenes/xazul.png" alt="x">
                </label>
            </div>
        </div>


    </div>



</body>
</html>
