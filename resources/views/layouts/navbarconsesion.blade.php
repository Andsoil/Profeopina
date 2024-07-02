<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <a href="{{ route('locale.change', ['locale' => 'en']) }}">
                    <img src="/imagenes/en.png" alt="{{ __('messages.translate_english') }}">
                </a>
            </div>
            <div class="logo">
                <a href="{{ route('locale.change', ['locale' => 'es']) }}">
                    <img src="/imagenes/es.png" alt="{{ __('messages.translate_spanish') }}">
                </a>
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
                <a href="{{route('iniciologueado')}}">{{ __('messages.home') }}</a>
                <a href="{{route('tuperfil')}}">{{ __('messages.profile') }}</a>
                <a href="{{route('turesenia')}}" class="btn btn-outline-danger">{{ __('messages.your_reviews') }}</a>
                <a href="{{route('profeguardado')}}" class="btn btn-outline-danger">{{ __('messages.saved_teachers') }}</a>
                <a href="{{route('configuracion')}}" class="btn btn-outline-danger">{{ __('messages.account_settings') }}</a>
                <a href="{{route('contactanos')}}">{{ __('messages.contact_us') }}</a>
                <a href="">{{ __('messages.logout') }}</a>
            </nav>
            <div>
                <label for="btn-menu" class="icon-equis">
                    <img src="/imagenes/xazul.png" alt="x">
                </label>
            </div>
        </div>
    </div>
</body>
</html>
